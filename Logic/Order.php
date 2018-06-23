<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author peca993
 */
class Order {
    
    public $id;
    public $specification_id;
    public $customer_id;
    public $product_id;
    public $count;
    
    
    
    
    public function __construct($id,$specification_id,$customer_id,$product_id,$count) {
        $this->id = $id;
        $this->specification_id = $specification_id;
        $this->customer_id = $customer_id;
        $this->product_id = $product_id;
        $this->count = $count;
    }
}
