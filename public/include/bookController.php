<?php
namespace coding\app\controllers;
use coding\app\models\Book;
use coding\app\models\category;
use coding\app\models\author;
use coding\app\models\publisher;



use coding\app\system\UploadFile;



class BookController extends Controller{
    public function saveBook(){
        //print_r($_POST);
        $cat_parts=array();
        $book=new Book();

        $book->title=$_POST['name'];
        // if($_POST['cate_id']!=""){
        //     $cat_parts=split("=>",$_POST['cate_id']);
        // }
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
        // $book->image=$_POST['book_img'];
        
        if($book->save())
        
        $this->view('feedback',['success'=>'تمت العملية بنجاح']);
        else 
        $this->view('feedback',['danger'=>'فشلت العملية']);
    
    }



    public function show(){
        $book=new Book();
        $bookData=$book->selectAll();
        
        $this->view('app-book-list',$bookData);
    }
    public function add(){
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
        \print_r( $categoryData);
        $this->view('app-book-add',$fieldData);

    }

    public function edit(){
        $this->view('app-book-edit');
    }
}
?>