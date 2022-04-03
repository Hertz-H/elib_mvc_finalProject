<?php
namespace coding\app\controllers;
use coding\app\models\Address;

class AddressController extends Controller{
    function newAddress(){ 
        $this->view('app-address-add');
    }

      

    public function saveAddress(){

        //print_r($_POST);
        $address=new Address();
        $address->name=$_POST['name'];
        $address->phone=$_POST['phone'];
        $address->email=$_POST['email'];
        $address->bio=$_POST['bio'];

        // $address->is_active=isset($_POST['is_active'])?1:0;
        $address->save();
        if($address->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    public static  function show(){
        require_once("app/views/app-address-list.php");

    }
    public static  function add(){
        require_once("app/views/app-address-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-address-edit.php");

    }
}
?>