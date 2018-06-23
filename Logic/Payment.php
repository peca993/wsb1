<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author peca993
 */
class Payment {
    
    public $id;
    public $customerID;
    public $date;
    public $value;
    public $description;
    
    public function __construct($id,$customerID,$date,$value,$description) {
        $this->id = $id;
        $this->customerID = $customerID;
        $this->date = $date;
        $this->value = $value;
        $this->description = $description;
    }
}
