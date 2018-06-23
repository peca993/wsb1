<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author peca993
 */
class Product {
    
    public $id;
    public $company;
    public $name;
    public $price1;
    public $price2;
    public $price3;
    public $price4;
    public $price5;
    public $price6;
    public $price7;
    public $price8;
    public $price9;
    public $price10;
    public $price11;
    public $price12;
    public $price13;
    public $price14;
    public $price15;
    public $description;
    
    public function __construct($id,$company,$name,$price1,$price2,$price3,$price4,$price5,$price6,$price7,
                                $price8,$price9,$price10,$price11,$price12,$price13,$price14,$price15,$description) {
        $this->id = $id;
        $this->company = $company;
        $this->name = $name;
        $this->price1 = $price1;
        $this->price2 = $price2;
        $this->price3 = $price3;
        $this->price4 = $price4;
        $this->price5 = $price5;
        $this->price6 = $price6;
        $this->price7 = $price7;
        $this->price8 = $price8;
        $this->price9 = $price9;
        $this->price10 = $price10;
        $this->price11 = $price11;
        $this->price12 = $price12;
        $this->price13 = $price13;
        $this->price14 = $price14;
        $this->price15 = $price15;
        $this->description = $description;
    }
}
