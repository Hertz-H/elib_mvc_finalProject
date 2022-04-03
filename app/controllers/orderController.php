<?php
namespace coding\app\controllers;
session_start();
class OrderController extends Controller {
    public  function load(){
      if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
          $this->view('order');}
          else{
            header('location:login');
          }
        // echo "from home ";
        }
        public static  function add(){
          require_once("app/views/app-order-add.php");
  
      }
  
      public   function edit(){
          require_once("app/views/app-order-edit.php");
  
      }
  
}





?>