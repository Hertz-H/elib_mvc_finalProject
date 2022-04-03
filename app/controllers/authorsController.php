<?php
namespace coding\app\controllers;

use coding\app\models\AUthor;

class AuthorsController extends Controller{

    public function createAuthor(){
        $author=new Author();
        $author->name="ali";
        $author->phone="77878788";
        $author->bio="fafdasdfasdfas";
        $author->email="auth@gmail.com";
        $author->created_by=4;
        // $author->is_active=1;
        $author->save();
    }

}
?>