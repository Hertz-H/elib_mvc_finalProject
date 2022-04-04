<?php
namespace coding\app\controllers;
use coding\app\models\Publisher;
use coding\app\system\UploadFile;

class PublisherController extends Controller{
    public function savePublisher(){

      
        $publisher=new Publisher();
        $publisher->name=$_POST['name'];
        $publisher->phone=$_POST['phone'];
        $publisher->alt_phone=$_POST['phone_2'];
        $publisher->fax=$_POST['fax'];
        $publisher->email=$_POST['email'];
        $publisher->address=$_POST['address'];
        $publisher->country=$_POST['country'];
        $imageName=UploadFile::uploadFile($_FILES['img']);
        $publisher->image=$imageName!=null?$imageName:"default_img.jpg";
        $publisher->created_by=4;
        // $publisher->is_active=isset($_POST['is_active'])?1:0;
      
        if($publisher->save())
        
        $this->view('feedback',['success'=>'تمت العملية بنجاح']);
        else 
        $this->view('feedback',['danger'=>'فشلت العملية']);

    }
    public   function show(){
        $publisher=new Publisher();
        $publisherData=$publisher->selectAll();
        
      
        $this->view("app-publisher-list",$publisherData);

    }
    public function add(){
        $this->view("app-publisher-add");

    }

    public   function edit(){
        $this->view("app-publisher-edit");

    }
}
?>