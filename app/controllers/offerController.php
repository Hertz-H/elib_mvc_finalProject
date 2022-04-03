<?php
namespace coding\app\controllers;
use coding\app\models\Offer;
use coding\app\models\book;
use coding\app\models\Category;



class OfferController extends Controller{
  public function saveOffer(){

    print_r($_POST);
    $offer=new Offer();
    $offer->title=$_POST['name'];
    $offer->discount=$_POST['discount'];
    $offer->start_date=$_POST['from'];
    $offer->end_date=$_POST['to'];
    $offer->created_by=4;
    $offer->is_active=isset($_POST['is_active'])?1:0;
  
    if($offer->save())
    
    $this->view('feedback',['success'=>'تمت العملية بنجاح']);
 
    else 
    $this->view('feedback',['danger'=>'فشلت العملية']);

}
    public  function show(){
      $offer=new Offer();
      $offerData=$offer->selectAll();
      $this->view("app-offer-list", $offerData);
   
        // echo "from home ";
        }
        public   function add(){
          $books=new Book();
          $allbooks=$books->selectAll();
        $categories=new Category();
        $allCategoires=$categories->selectAll();
        
        $viewConent=array('books'=>$allbooks,'categories'=>$allCategoires);
      
        $this->view('app-offer-add',$viewConent);
          // $this->view("app-offer-add");
  
      }
  
      public   function edit(){
        $this->view("app-offer-edit");
  
      }
  
}





?>