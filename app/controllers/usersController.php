<?php
namespace coding\app\controllers;
session_start();
use coding\app\models\User;
use coding\app\models\City;  
use coding\app\models\Address;  

class UsersController extends Controller{
    public  static $feedback=array();
    function add(){
        $this->view('new_user');
    }
    function show(){
       
            $user=new User();
            $Data=$user->selectAll();    
           
                  
            $dataSent=array(
                $Data,
               self::$feedback
            );
         
            $this->view('app-user-list',$dataSent);
    }
   

    public function saveUser(){

        //print_r($_POST);
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=1;

        $user->role_id=1;
      
        
        if($user->save())
    
        {
            self::$feedback['success']=' تمت العمليةبنجاح';}
            else{
                self::$feedback['danger']='فشلت العملية';
            }
            $userData=$user->selectAll();       
            $dataSent=array(
                $userData,
               self::$feedback
            );
         
            $this->view('app-user-list',$dataSent);
         
       

    }
    public function verifyUser(){

        //print_r($_POST);
        $user=new User();
        $encryptedPass=md5($_POST['password']);
        $email=$_POST['email'];
        $userData=$user->selectWhere('email',$email);  
        if($userData){
            foreach($userData as $userInfo){
                if( $encryptedPass==$userInfo["password"]) {
                    if( $userInfo["role_id"]==2&&$userInfo["is_active"]==1){
                    
                     $_SESSION["id"]=$userInfo["id"];
                     $_SESSION["role"]=$userInfo["role_id"];
                     header('location:list_book');

                    }
                    else if( $userInfo["role_id"]==1&&$userInfo["is_active"]==1){
                   
                     $_SESSION["id"]=$userInfo["id"];
                     $_SESSION["role"]=$userInfo["role_id"];
                     header('location:home');
                    }
                    else{
                     $this->view('feedback',['danger'=>'تحقق من صحة ادخال البيانات']); 
                    }
               
                }
              
     
     
               }
                 }
       
        
            else{
                $this->view('feedback',['danger'=>'تحقق من صحة ادخال الايميل']); 
               }
         
         
        

    }
    public function register(){
        $this->view("new_user");
    }
    public function signUpUser(){
    //print_r($_POST);
    $user=new User();
    $user->name=$_POST['name'];
    $user->email=$_POST['email'];
    $user->password=md5($_POST['password']);
    $user->is_active=1;
    $user->role_id=1;
    $userInserted=$user->save();
    $addressInserted=0;
   
    if($userInserted)

    {  $user=new User();
        $userInfo = $user->selectWhere("email",$_POST['email']);
        foreach($userInfo as $u)
           { $Address=new Address();
            $Address->user_id=$u['id'];
            $Address->address=$_POST['address'];
            $Address->phone=$_POST['phone'];
            $Address->city_id=$_POST['city'];
            $Address->is_active=1;
            $addressInserted=$Address->save();
       
        } 
     }
     if($addressInserted==1&&$userInserted==1){
        self::$feedback['success']=' تمت العمليةبنجاح';
        header('location:login');
     }
        else{

            self::$feedback['danger']='فشلت العملية';
            header('location:signup');
        }
      
    }

    public function delete(){
        
    }

    public   function login(){
        $this->view("login");

    }

    public  function signup(){
        $city=new City();
        $cityData=$city->selectAll();
        $this->view("signup",$cityData);

    }
    public  function editPage(){
        if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
            if($_SESSION["role"]==2){
                if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['edit'])){
                    $user_id= $_COOKIE['ProductId'];
                    $user=new User();
                    $userData=$user->selectWhere("id",$user_id);  
                    if( $userData>1){
                        $this->view('/edit_user',$userData);
                    }
                }
            }
         else{
            header('location:home');
         }
        }
         else{
            header('location:home');
         }
 
        
        
       

    }
    public  function edit(){

      
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $where_condition = array(  
            'id'     =>  $_COOKIE['ProductId']   
        );
        if($user->update($where_condition))
    
        {
            self::$feedback['success']=' تمت العمليةبنجاح';}
            else{
                self::$feedback['danger']='فشلت العملية';
            }
            $userData=$user->selectAll();       
            $dataSent=array(
                $userData,
               self::$feedback
            );
            $this->removeData("edit");
            $this->view('app-user-list',$dataSent);
         
             
        
           
           
        }

        public function activate(){
            if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['active'])){
            $user=new User();
            
            $user->is_active= $_COOKIE['active']  ;
            $where_condition = array(  
                'id'     =>  $_COOKIE['ProductId']   
            );
            if($user->update($where_condition))
             {
            self::$feedback['success']=' تمت العمليةبنجاح';
             }   
            else {
            self::$feedback['danger']='فشلت العملية';
            }
            
            $Data=$user->selectAll();       
            $dataSent=array(
                $Data,
               self::$feedback
            );
            $this->removeData("active");
            $this->view('app-user-list',$dataSent);
            
             
            }

        }










}
?>