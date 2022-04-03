<?php
namespace coding\app\models;



class PaymentMethod extends Model{
   

    function __construct()
    {
        parent::$tblName="payements";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}