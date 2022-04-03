<?php
namespace coding\app\controllers;
use coding\app\models\PaymentMethod;
use coding\app\models\UserPayment;

use coding\app\models\User;


class UserPayMethodController extends Controller{
    function newPayment(){
        $this->view('app-userPayment-add');
    }

      

    public function savePayment(){

        //print_r($_POST);
        $pay=new UserPayment();
        $pay->user_id=4;
        $pay->payment_id=1;	
        
        // $pay->is_active=isset($_POST['is_active'])?1:0;
        $pay->save();
        if($pay->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    public  function show(){
      
        $this->view("app-userPaymentMethod-list");

    }
    public   function add(){
        $Payment=new PaymentMethod();
        $paymentData=$Payment->selectAll();
        $user=new User();
        $userData=$user->selectAll();
        $dataPayment=array(
            $userData,
            $paymentData
        );
        $this->view("app-userPaymentMethod-add",$dataPayment);

    }

    public  function edit(){
        $this->view("app-userPaymentMethod-edit");

    }
}
?>