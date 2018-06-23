<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Specification
 *
 * @author peca993
 */
class Specification {
    
    public $id;
    public $buyer;
    public $date;
    public $path;
    public $value;
    public $discount;
    public $description;
    


    public function __construct($id,$buyer,$date,$path,$value,$discount,$description) {
        $this->id = $id;
        $this->buyer = $buyer;
        $this->date = $date;
        $this->path = $path;
        $this->value = $value;
        $this->discount = $discount;
        $this->description = $description;
    }
    
    
}
