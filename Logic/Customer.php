<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author peca993
 */
class Customer {
    
    public $id;
    public $name;
    public $category;
    public $address;
    public $telNumber;
    public $pib;
    public $city;
    public $postCode;
    public $email;
    public $currentAccount;


    public function __construct($id,$name,$category,$address,$city,$postCode,$telephone_number,$pib,$email,$currentAccount) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->address = $address;
        $this->telNumber = $telephone_number;
        $this->pib = $pib;
        $this->city = $city;
        $this->postCode = $postCode;
        $this->email = $email;
        $this->currentAccount = $currentAccount;
    }
}
