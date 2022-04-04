<?php
namespace coding\app\controllers;
session_start();
use coding\app\models\Book;
use coding\app\models\category;
use coding\app\models\author;
use coding\app\models\publisher;
use coding\app\system\UploadFile;
class BookController extends Controller{
    public  static $feedback=array();
    public function saveBook(){
    
        $book=new Book();
        $book->title=$_POST['name'];
        $book->category_id= $_POST['cate_id'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->author_id=$_POST['author_id'];
        $book->publisher_id=$_POST['publisher_id'];
        $book->pages_number=$_POST['page_num'];
        $book->format=$_POST['format'];
        $book->quantity=$_POST['quantity'];
        $book->created_by=4;
        $imageName=UploadFile::uploadFile($_FILES['book_img']);
        $book->image=$imageName!=null?$imageName:"default_img.jpg";
      
        if($book->save())
        
        {
            self::$feedback['success']=' تمت العمليةبنجاح';
            
         
             }   
            else {
            self::$feedback['danger']='فشلت العملية';
            
            }
            $bookData=$book->selectAll();       
            $dataSent=array(
                $bookData,
               self::$feedback
            );
       
            $this->view('app-book-list',$dataSent);
    
     
        
    
    
    }



    public function show(){
     
        if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
            if($_SESSION["role"]==2){
                $book=new Book();
                $bookData=$book->selectAll();
                
                $dataSent=array(
                    $bookData,
                self::$feedback
                );
            
                $this->view('app-book-list',$dataSent);
             }
             else{
                 header('location:home');
 
             }

         }
        else{
            header('location:home');

        }

    }



    public function getComponents(){
        $category=new Category();
        $categoryData=$category->selectAll();
        $author=new Author();
        $authorData=$author->selectAll();
        $publisher=new Publisher();
        $publisherData=$publisher->selectAll();
        $fieldData=array(
            $categoryData,
            $authorData,
            $publisherData
        );
      
        return $fieldData;
    }
    
    public function add(){
        if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
            if($_SESSION["role"]==2){
                $fieldData= $this->getComponents();
                
                $this->view('app-book-add',$fieldData);
            }
            else{
                header('location:home');
            }
        
        }
        else{
            header('location:home');
        }
    }







    public function edit(){
    //  print_r($_COOKIE);
    if(isset($_SESSION["id"])&&!empty($_SESSION["id"])){
        if($_SESSION["role"]==2){
            if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['edit'])){
                $p_id= $_COOKIE['ProductId'];
                $book=new Book();
                $rows=$book->selectWhere("id",$p_id);
                if( $rows>1){
                    // $this->removeData($_COOKIE['edit']);
                    $fieldData= $this->getComponents();
                    $this->view('app-book-edit',array($fieldData[0],$fieldData[1],$fieldData[2],$rows));
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
public function save_edit(){
   
    $book=new Book();
    $book->title=$_POST['name'];
    $book->category_id= $_POST['cate_id'];
    $book->price=$_POST['price'];
    $book->description=$_POST['description'];
    $book->author_id=$_POST['author_id'];
    $book->publisher_id=$_POST['publisher_id'];
    $book->pages_number=$_POST['page_num'];
    $book->format=$_POST['format'];
    $book->quantity=$_POST['quantity'];
    $book->created_by=$_SESSION["id"];
    $imageName=UploadFile::uploadFile($_FILES['book_img']);
    $book->image=$imageName!=null?$imageName:"default_img.jpg";
    $where_condition = array(  
        'id'     =>  $_COOKIE['ProductId']   
    );
    if($book->update($where_condition))
    
    {
        self::$feedback['success']=' تمت العمليةبنجاح';
        
     
         }   
        else {
        self::$feedback['danger']='فشلت العملية';
        //  header('location:edit_book');
        }
        $bookData=$book->selectAll();       
        $dataSent=array(
            $bookData,
           self::$feedback
        );
        $this->removeData("edit");
        $this->view('app-book-list',$dataSent);

       
    }
public function activate(){
if(isset($_COOKIE['ProductId'])&&isset($_COOKIE['active'])){
$book=new Book();
$book->is_active= $_COOKIE['active']  ;
$where_condition = array(  
    'id'     =>  $_COOKIE['ProductId']   
);
if($book->update($where_condition))
 {
// $this->view('feedback',['success'=>'تمت العملية بنجاح']);

self::$feedback['success']=' تمت العمليةبنجاح';
 }   
else {
self::$feedback['danger']='فشلت العملية';
}

$bookData=$book->selectAll();       
$dataSent=array(
    $bookData,
   self::$feedback
);
$this->removeData("active");
$this->view('app-book-list',$dataSent);
 }
 else{

 }
// \print_r(self::$feedback);
// header('location:list_book');
 
}

//remove from cookies

}
?>