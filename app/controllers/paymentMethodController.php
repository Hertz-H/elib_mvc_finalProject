<?php
namespace coding\app\controllers;
use coding\app\models\PaymentMethod;
use coding\app\system\UploadFile;

class PaymentMethodController extends Controller{
    
    public  function show(){
        $payment=new PaymentMethod();
        $payData=$payment->selectAll();
        $this->view('app-paymentMethod-list',$payData);

    }
    public   function add(){
     
        $this->view('app-paymentMethod-add');
    }

    public   function edit(){
        $this->view('app-paymentMethod-edit');
    }
    
public function savePaymentMethod(){

   
    $payment=new PaymentMethod();
    $payment->name=$_POST['name'];
    $imageName=UploadFile::uploadFile($_FILES['img']);
    $payment->image=$imageName!=null?$imageName:"default_img.jpg";
    // $payment->is_active=isset($_POST['is_active'])?1:0;
    $payment->created_by=4;
    if($payment->save())
    
    $this->view('feedback',['success'=>'تمت العملية بنجاح']);
    else 
    $this->view('feedback',['danger'=>'فشلت العملية']);

}
  
}
?>