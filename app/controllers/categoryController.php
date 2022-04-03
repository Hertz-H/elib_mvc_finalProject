<?php
namespace coding\app\controllers;
session_start();
use coding\app\models\Category;
use coding\app\system\UploadFile;


class CategoryController extends Controller{
  public  static $feedback=array();
  function newCategory(){
    $this->view('app-category-add');
    }

  

public function saveCategory(){

    // print_r($_FILES);
    $category=new Category();
    $category->name=$_POST['name'];
    $imageName=UploadFile::uploadFile($_FILES['img']);
    $category->image=$imageName!=null?$imageName:"default_img.jpg";
    // $category->is_active=isset($_POST['is_active'])?1:0;
    $category->created_by=$_SESSION["id"];
    if($category->save())
    {
    self::$feedback['success']=' تمت العمليةبنجاح';}
    else{
        self::$feedback['danger']='فشلت العملية';
    }
    $data=$category->selectAll();       
    $dataSent=array(
        $data,
       self::$feedback
    );
  
    $this->view('app-category-list',$dataSent);

}
  
  public  function show(){
    $category=new Category();
    $Data=$category->selectAll();
    $dataSent=array(
      $Data,
     self::$feedback
  );

    $this->view("app-category-list", $dataSent);
        // echo "from home ";
        }
        public   function  add(){
          $this->view("app-category-add");
  
      }
      public   function  edit(){
        $category=new Category();
        $category->name=$_POST['name'];
        $category->created_by=$_SESSION["id"];
        $imageName=UploadFile::uploadFile($_FILES['img']);
        $category->image=$imageName!=null?$imageName:"default_img.jpg";
        $where_condition = array(  
            'id'     =>  $_COOKIE['ProductId']   
        );
        if($category->update($where_condition))
        
        {
            self::$feedback['success']=' تمت العمليةبنجاح';
            
         
             }   
            else {
            self::$feedback['danger']='فشلت العملية';
            //  header('location:edit_book');
            }
            $data=$category->selectAll();       
            $dataSent=array(
                $data,
               self::$feedback
            );
            $this->removeData("edit");
            $this->view('app-category-list',$dataSent);
    
      }
      public   function  editPage(){
        if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
          if($_SESSION["role"]==2){
              if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['edit'])){
                  $id= $_COOKIE['ProductId'];
                  $category=new Category();
                  $data=$category->selectWhere("id",$id);  
                  if( $data>1){
                      $this->view('/app-category-edit',$data);
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
      public function activate(){
        $category=new Category();
        
        $category->is_active= $_COOKIE['active']  ;
        $where_condition = array(  
            'id'     =>  $_COOKIE['ProductId']   
        );
        if($category->update($where_condition))
         {
        self::$feedback['success']=' تمت العمليةبنجاح';
         }   
        else {
        self::$feedback['danger']='فشلت العملية';
        }
        
        $Data=$category->selectAll();       
        $dataSent=array(
            $Data,
           self::$feedback
        );
        $this->removeData("active");
        $this->view('app-category-list',$dataSent);
        // \print_r(self::$feedback);
        // header('location:list_book');
         
        }
      
}





?>