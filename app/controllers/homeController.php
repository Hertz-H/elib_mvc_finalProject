<?php
namespace coding\app\controllers;
session_start();

use coding\app\models\Category;
use coding\app\models\book;


class HomeController extends Controller{
   
 public  function show(){
   $category=new Category();
   $categoryData=$category->selectWhere("is_active",'1');
   $book=new Book();
   $bookData=array();
   $i=0;
      foreach( $categoryData as $cat){
     
      $bookData[$cat["name"]] = $book->selectWhere("category_id",$cat["id"]);

      }
      // \print_r($bookData);
      $homeData=array(
        $categoryData,
        $bookData
      );
   
      $this->view("index", $homeData);
        }
     
        public  function bookInfo(){
          print_r($_COOKIE);
          if(isset($_COOKIE['bookId'])){
            $book_id= $_COOKIE['bookId'];
            $book=new Book();
            $books= $book->selectWhere("id",$book_id);
            $catBooks=array();
            foreach( $books as $b){
              // $cat_id=$book["category_id"];
            $catBooks["selectedBook"]= $book->selectWhere("category_id",$b["category_id"]);

            }
            $bookData=array(
              $books,
              $catBooks
            );
          //  print_r( $books);
          
            // $this->removeData("bookId");
        
            $this->view("book", $bookData);
         
        }
      }
        public  function showjoin(){
          $book=new Book();
          $bookData=  $book->joinThree(array("u.name as userName","p.name as PayName"),"users u ","user_payment_methods u_P","u_P.user_id = u.id","payements p ","u_P.payment_id = p.id");
       \print_r($bookData);
        }


        public  function getCatBooks(){
              // unset($_COOKIE);
              // \print_r($_COOKIE);
              if(isset($_COOKIE['catId'])){
              $cat_id= $_COOKIE['catId'];
              $book=new Book();
              $books= $book->selectWhere("category_id",$cat_id);
            //  print_r( $books);
              // $this->removeData("catId");
              $this->view("category", $books);
        }
        }

    // public  function show(){
    //   $category=new Category();
    //   $categoryData=$category->selectAll();
    //   $data=array("cat"=> $categoryData);
    //   $book=new Book();
    //   \print_r($categoryData[0]);
    //   $catBookData;
    //  foreach ($categoryData as $cat){
    //   $bookData=$book->selectWhere("category_id",$cat["id"]);
    //   $data=array( $cat["name"]=> $bookData);
    // $bookData=$book->selectWhere("category_id",1);
    //         }
     

            // \print_r($bookData);
            // \print_r($data);
      // $this->view("index", $categoryData);
       
         
          // }
    // public  function show(){
    //  $route="users/add/{status}/{country}";
    //  $paramNum=\preg_match_all('/{(.*?)}/',$route,$params);
    // $urI="users/add/active/yemen";
    // $urArray= \substr($urI,$paramNum);
    // $paramsVal=explode("/", $urArray);
    // $routArray=\array_combine($params[1],$paramsVals);
    //  \print_r( $routArray);
        

    // }
  
}





?>