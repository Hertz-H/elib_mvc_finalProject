<?php
namespace coding\app\controllers;
session_start();
use coding\app\models\City;


class CityController extends Controller{
    public  static $feedback=array();

    function newCity(){
        $this->view('app-city-add');
    }

      

    public function saveCity(){

        print_r($_POST);
        $City=new City();
        $City->name=$_POST['name'];
        $City->created_by=$_SESSION["id"];
        // $City->is_active=isset($_POST['is_active'])?1:0;
      
        if($City->save())
        
        $this->view('feedback',['success'=>'تمت العملية بنجاح']);
        else 
        $this->view('feedback',['danger'=>'فشلت العملية']);

    }
    public  function show(){
        if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
            if($_SESSION["role"]==2){
        $city=new City();
        $cityData=$city->selectAll();
        $dataSent=array(
            $cityData,
           self::$feedback
        );
       
            
            $this->view("app-city-list",$dataSent);
        }

        else{
        header('location:home');
        }
        }
        else{
        header('location:home');
        }

 }

    public   function add(){
        $this->view("app-city-add");

    }

    public   function edit(){
        if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
            if($_SESSION["role"]==2){
                if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['edit'])){
                    $id= $_COOKIE['ProductId'];
                    $city=new City();
                    $cityData=$city->selectWhere("id",$id);  
                    if(  $cityData>1){
                        $this->view('/app-city-edit',$cityData);
                     
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
    public function saveEditted(){
        
        $city=new City();
        $city->name=$_POST['name'];
       
        $where_condition = array(  
            'id'     =>  $_COOKIE['ProductId']   
        );
        if($city->update($where_condition))
    
        {
            self::$feedback['success']=' تمت العمليةبنجاح';}
            else{
                self::$feedback['danger']='فشلت العملية';
            }
            $cityData=$city->selectAll();       
            $dataSent=array(
                $cityData,
               self::$feedback
            );
            $this->removeData("edit");
            $this->view('app-city-list',$dataSent);
         
    }


    public function activate(){
     if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['active'])){
        $city=new City();
        
        $city->is_active= $_COOKIE['active']  ;
        $where_condition = array(  
            'id'     =>  $_COOKIE['ProductId']   
        );
        if($city->update($where_condition))
         {
        self::$feedback['success']=' تمت العمليةبنجاح';
         }   
        else {
        self::$feedback['danger']='فشلت العملية';
        }
        
        $Data=$city->selectAll();       
        $dataSent=array(
            $Data,
           self::$feedback
        );
        $this->removeData("active");
        $this->view('app-city-list',$dataSent);
      
         
        }
    }


}
?>