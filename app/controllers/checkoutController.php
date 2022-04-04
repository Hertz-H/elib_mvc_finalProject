<?php
namespace coding\app\controllers;
use coding\app\models\Book;

session_start();

class CheckoutController extends Controller{
    public  function load(){
       
          $this->view("check_out");
       
        }
        public  function delete (){

          $this->view("check_out");
        }
  public function add(){
    $operationKey='';
    print_r($_COOKIE);
     $p_id= $_COOKIE['ProductId'];
    $book=new Book();
    $rows=$book->selectWhere("id",$p_id);

    foreach ($rows as $row){
        echo"from database".$row['title'];
        if (isset($_SESSION['cart'][$p_id])&&$_SESSION['cart'][$p_id]!=""){
           $quantity= $_SESSION['cart'][$p_id]["quantity"];
           $price= $row['price'];
           echo"Quantity here".$quantity;
          
          
           if(isset($_COOKIE['decrease'])&& $quantity>1){
            $_SESSION['cart'][$p_id]["quantity"]=$quantity-1; 
            $_SESSION['cart'][$p_id]["price"]=$_SESSION['cart'][$p_id]["price"]-$price;
            $operationKey="decrease";
           }
           if(isset($_COOKIE['delete'])){
            unset($_SESSION['cart'][$p_id]);
            $operationKey="delete";
           
           }
           if(isset($_COOKIE['increase'])){ 
            $_SESSION['cart'][$p_id]["quantity"]=$quantity+1; 
            $_SESSION['cart'][$p_id]["price"]=$price*($_SESSION['cart'][$p_id]["quantity"]);
            $operationKey="increase";
        }
        if(isset($_COOKIE['add'])){ 
          $_SESSION['cart'][$p_id]["quantity"]=$quantity+1; 
          $_SESSION['cart'][$p_id]["price"]=$price*($_SESSION['cart'][$p_id]["quantity"]);
          $operationKey="increase";
          header('location:home');
      }
        }
    
        else{
            $new_product_array=
            $_SESSION['cart'][$p_id]=array("id"=>$row['id'],"name"=>$row['title'],"description"=>$row['description'],"image"=>$row['image'],
            "format"=>$row['format'],  "price"=>$row['price'],"quantity"=>1);
            foreach($_SESSION['cart'] as $pro_arr){
                echo " <br>".$pro_arr["name"]." <br>";
     
            }
            $operationKey="increase";
            header('location:home');
        }                                  
       
       }
      
    $this->removeData($operationKey);
    header('location:check_out');
}
//remove from cookies
public function removeData($key){
  if(isset($_COOKIE['ProductId'])){
   
    setcookie("ProductId", "", time() - 3600); 
  }
  if(isset($_COOKIE['increase'])){
    
    setcookie("increase", "", time() - 3600); 
  }
  if(isset($_COOKIE['decrease'])){
    echo  $_COOKIE['decrease'];
    setcookie("decrease", "", time() - 3600); 
  }
  if(isset($_COOKIE['delete'])){
    echo  $_COOKIE['delete'];
    setcookie("delete", "", time() - 3600); 
  }
}
}





?>