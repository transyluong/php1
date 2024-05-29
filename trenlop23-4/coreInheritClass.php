<?php

use FFI\ParserException;

class Product{
    public $id;
    public $name;

    public function __construct($id,$name)
    {
        $this -> id = $id;
        $this -> name = $name;

    }
    //GET SET id
    public function get_id(){
        return $this->id;
    }
    public function set_id($n){
        $this->id = $n;
    }
    // GET SET name
    public function get_name(){
        return $this->name;
    }
    public function set_name($n){
        $this->name = $n;
    }

    public function toString(){
        return $this->id."-".$this->name;
    }
}

class Laptop extends Product{

    public function __construct($id,$name,$company,$color,$amount,$price)
    {   
        $this -> id = $id;
        $this -> name = $name;
        $this -> company = $company;
        $this -> color = $color;
        $this -> amount = $amount;
        $this -> price = $price;
    }
    //-----------------------------
    public function get_company()
    {
       return $this -> company; 
    }
    public function set_company($n){
        $this->company = $n;
    }

    public function get_color(){
        return $this->color;
    }
    public function set_color($n){
        $this->color = $n;
    }

    public function get_amount(){
        return $this->amount;
    }
    public function set_amount($n){
        $this->amount = $n;
    }

    public function get_price(){
        return $this->price;
    }
    public function set_price($n){
        $this->price = $n;
    }
    //------------------------------
    public function subtotal(){
        return intval($this->price) * intval($this->amount);
    }

    public function toString(){
        return parent::toString().$this->company . "-" . $this->color . "-" . $this->amount . "-" . $this->price . "-" . $this->subtotal();
     }
    
}





?>