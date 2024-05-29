<?php

abstract class Product {
    protected $id;
    protected $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // GET SET id
    public function get_id() {
        return $this->id;
    }

    public function set_id($n) {
        $this->id = $n;
    }

    // GET SET name
    public function get_name() {
        return $this->name;
    }

    public function set_name($n) {
        $this->name = $n;
    }

    abstract public function toString();
}

class Laptop extends Product {
    protected $company;
    protected $color;
    protected $amount;
    protected $price;

    public function __construct($id, $name, $company, $color, $amount, $price) {
        parent::__construct($id, $name);
        $this->company = $company;
        $this->color = $color;
        $this->amount = $amount;
        $this->price = $price;
    }

    // GET SET company
    public function get_company() {
        return $this->company;
    }

   
    public function set_company($n) {
        $this->company = $n;
    }

    // GET SET color
    public function get_color() {
        return $this->color;
    }

    public function set_color($n) {
        $this->color = $n;
    }

    // GET SET amount
    public function get_amount() {
        return $this->amount;
    }

    public function set_amount($n) {
        $this->amount = $n;
    }

    // GET SET price
    public function get_price() {
        return $this->price;
    }

    public function set_price($n) {
        $this->price = $n;
    }

    // subtotal
    public function subtotal() {
        return intval($this->price) * intval($this->amount);
    }

    // toString
    public function toString() {
        return $this->get_id() . "-" . $this->get_name() . "-" . $this->company . "-" . $this->color . "-" . $this->amount . "-" . $this->price . "-" . $this->subtotal();
    }
}