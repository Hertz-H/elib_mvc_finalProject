<?php
namespace coding\app\controllers;
session_start();
use coding\app\models\PaymentMethod; 
use coding\app\models\Address; 
use coding\app\models\Order; 
use coding\app\models\OrderDetails; 

class OrderController extends Controller {
    public  function load(){
      if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
        $payment=new PaymentMethod();
        $paymentData= $payment->selectAll();
        $Address=new Address();
        $addressData= $Address->selectWhere("user_id",$_SESSION["id"]);
         
        $viewConent=array('payments'=>$paymentData,'addresses'=>$addressData);
      
        $this->view('app-order-add',$viewConent);
        
        
        
        
        }
          else{
            header('location:login');
          }
        // echo "from home ";
        }
        public   function saveOrder(){
       
          $order=new Order();
          $order->user_id=$_SESSION['id'];
          $order->status=0;
          $order->discount=0;
          $order->payment_method=$_POST["payment"];
          $order->address_id=$_POST["address"];;
          $order->total=$_SESSION['totall'];
          $order->net_total=$_SESSION['totall'];
        
        //ORDER BY Country DESC
          if($order->save()){
            $lastInserted= $order->selectAll( "ORDER BY id DESC","limit 1");
                if($lastInserted){
              
                  $orderDetails=new OrderDetails();
                  foreach($lastInserted as $row){
                      foreach($_SESSION['cart']as $product ){
                        $orderDetails->order_id=$row["id"];
                        $orderDetails->book_id=$product["id"];
                        $orderDetails->quantity=$product["quantity"]; 
                        $orderDetails->save();

                      }
                      unset($_SESSION['cart']);
                     echo '<script>alert(" تمت العملية بنجاح");
                     window.location.href="home";</script>';
                    
                  }
                  // header('location:home');
              }
          }
      else{
        echo "order not inserted";
      }
      }
  
      public   function edit(){
          require_once("app/views/app-order-edit.php");
  
      }
  
}





?>