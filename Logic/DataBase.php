<?php

include './Customer.php';
include './Specification.php';
include './Product.php';
include './Order.php';
include './Payment.php';

//  DB ACCSESS
function connectToBase(){

    $host = "mysql579.loopia.se";
    $userName = "petar@w38812";
    $password = "Pecafaca93!";
    $baseName = "wsb_rs_db_2";
    $con = new mysqli($host, $userName, $password, $baseName);
    return $con;
}



//*
//
//            SPECIFICATION
//
//*/
function InsertSpecificationDB($specification){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        $query = "INSERT INTO `specification` "
                . "(`id`, "
                . "`buyer`, "
                . "`date`, "
                . "`path`, "
                . "`value`, "
                . "`discount`, "
                . "`description`) "
                . "VALUES "
                . "(NULL, "
                . "'$specification->buyer', "
                . "'$specification->date', "
                . "'$specification->path', "
                . "$specification->value,"
                . "$specification->discount,"
                . "'$specification->description');";
        
        $res = $con->query($query);
        
        $id;
        if ($res) {
            
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function InsertSpecificationWithIDDB($specification){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        $query = "INSERT INTO `specification` "
                . "(`id`, "
                . "`buyer`, "
                . "`date`, "
                . "`path`, "
                . "`value`, "
                . "`discount`, "
                . "`description`) "
                . "VALUES "
                . "($specification->id, "
                . "'$specification->buyer', "
                . "'$specification->date', "
                . "'$specification->path', "
                . "$specification->value,"
                . "$specification->discount, "
                . "'$specification->description');";
        
        $res = $con->query($query);
        if ($res) {
            
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}


function DeleteSpecificationDB($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        $res = $con->query('DELETE FROM `specification` WHERE `specification`.`id` ='.$id);
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetSpecificationByID($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from specification where id=".$id);
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            
            while ($row = $res->fetch_assoc()) {
                $line = $row;
            }
            // zatvaranje objekta koji cuva rezultat
          
            $specification = new Specification(
                    $line['id'],
                    $line['buyer'],
                    $line['date'],
                    $line['path'],
                    $line['value'],
                    $line['discount'],
                    $line['description']);
            
            
          
            return $specification;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetSpecificationByPath($path){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from specification where path='$path'");
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            
            while ($row = $res->fetch_assoc()) {
                $line = $row;
            }
            // zatvaranje objekta koji cuva rezultat
          
            $specification = new Specification(
                    $line['id'],
                    $line['buyer'],
                    $line['date'],
                    $line['path'],
                    $line['value'],
                    $line['discount'],
                    $line['description']);
            
            
          
            return $specification;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetSpecificationsDB($buyer = NULL,$dateFrom = NULL,$dateTo = NULL){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        
        $from = $dateFrom;
        if($dateFrom == NULL){
            $from = '2000-01-01';
        }
        
        $to = $dateTo;
        if($dateTo == NULL){
            $to = date("Y-m-d");
        }
        
        
        $query = 'SELECT * FROM `specification` WHERE `date`BETWEEN "'.$from.'" and "'.$to.'"';
        
        if($buyer != NULL){
            $query = $query.' and `buyer` = "'.$buyer.'"';
        }            

        $query = $query." ORDER BY date";
        
        $res = $con->query($query);
        if ($res) {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            $i = 0;
            while ($row = $res->fetch_assoc()) {
                $niz[$i] = $row;
                $i++;
            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $niz;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
}

//*
//
//            CUSTOMER
//
//*/

function InsertCustomerDB($customer){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        
        $sqlQuery = "INSERT INTO `customer` 
                (`id`,
                `name`, 
                `category`, 
                `address`, 
                `city`,
                `post_code`,
                `telephone_number`,
                `pib`,
                `email`, 
                `current_account`) 
                VALUES 
                (NULL,
                '$customer->name',
                 $customer->category,
                '$customer->address',
                '$customer->city',
                '$customer->postCode',
                '$customer->telNumber',
                '$customer->pib',
                '$customer->email',
                '$customer->currentAccount')"; 
        $res = $con->query($sqlQuery);
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function InsertCustomerWithIDDB($customer){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        
        $sqlQuery = "INSERT INTO `customer` 
                (`id`,
                `name`, 
                `category`, 
                `address`, 
                `city`,
                `post_code`,
                `telephone_number`,
                `pib`,
                `email`, 
                `current_account`) 
                VALUES 
                ($customer->id,
                '$customer->name',
                 $customer->category,
                '$customer->address',
                '$customer->city',
                '$customer->postCode',
                '$customer->telNumber',
                '$customer->pib',
                '$customer->email',
                '$customer->currentAccount')"; 
        $res = $con->query($sqlQuery);
        if ($res) {
            
        }
        else
        {
            print ("Neispravni podaci!");
        }
    }
    $con->close();
}


function DeleteCustomerDB($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        $res = $con->query('DELETE FROM `customer` WHERE `customer`.`id` ='.$id);
        if ($res) {
            //$res->close();            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}


function UpdateCustomerByIDDB($id,$customer){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $query = "UPDATE `customer` SET "
                . "`name`='$customer->name',"
                . "`category`=$customer->category,"
                . "`address`='$customer->address',"
                . "`city`='$customer->city',"
                . "`post_code`='$customer->postCode',"
                . "`telephone_number`='$customer->telNumber',"
                . "`pib`='$customer->pib',"
                . "`email`='$customer->email',"
                . "`current_account`='$customer->currentAccount'"
                . "where id = $id";
        
        $res = $con->query($query);
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetCustomerByID($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from customer where id=".$id);
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            
            while ($row = $res->fetch_assoc()) {
                $line = $row;
            }
            // zatvaranje objekta koji cuva rezultat
            
            $customer = new Customer(
                    $line['id'],
                    $line['name'],
                    $line['category'],
                    $line['address'],
                    $line['city'], 
                    $line['post_code'],
                    $line['telephone_number'],
                    $line['pib'],
                    $line['email'], 
                    $line['current_account']);
            
            
          
            return $customer;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetCustomerByName($name){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from customer where name='$name'");
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            
            while ($row = $res->fetch_assoc()) {
                $line = $row;
            }
            // zatvaranje objekta koji cuva rezultat
            
            $customer = new Customer(
                    $line['id'],
                    $line['name'],
                    $line['category'],
                    $line['address'],
                    $line['city'], 
                    $line['post_code'],
                    $line['telephone_number'],
                    $line['pib'],
                    $line['email'], 
                    $line['current_account']);
            
            
          
            return $customer;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetAllCustomersNamesDB(){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select name from customer order by name");
        if ($res) {
            
            $customers = array();
            while ($row = $res->fetch_assoc()) {
                array_push($customers, $row['name']);
            }
            // zatvaranje objekta koji cuva rezultat
            
          
            return $customers;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetAllCustomersDB(){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from customer order by name");
        if ($res) {
            
            $customers = array();
            while ($row = $res->fetch_assoc()) {
                array_push($customers, $row);
            }
            // zatvaranje objekta koji cuva rezultat
            
          
                        
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $customers;
}


//*
//
//            PRODUCT
//
//*/
function InsertProductDB($product){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        for($i=2;$i<=15;$i++){
            if($product->{"price$i"} == ""){
                $product->{"price$i"} = 'NULL';
            }
        }
        
        $query ="INSERT INTO `product` ("
                . "`id`,"
                . " `company`,"
                . " `name`,"
                . " `price1`,"
                . " `price2`,"
                . " `price3`,"
                . " `price4`,"
                . " `price5`,"
                . " `price6`,"
                . " `price7`,"
                . " `price8`,"
                . " `price9`,"
                . " `price10`,"
                . " `price11`,"
                . " `price12`,"
                . " `price13`,"
                . " `price14`,"
                . " `price15`,"
                . " `description`)"
                . " VALUES ("
                . " '$product->id',"
                . " '$product->company',"
                . " '$product->name',"
                . " $product->price1,"
                . " $product->price2,"
                . " $product->price3,"
                . " $product->price4,"
                . " $product->price5,"
                . " $product->price6,"
                . " $product->price7,"
                . " $product->price8,"
                . " $product->price9,"
                . " $product->price10,"
                . " $product->price11,"
                . " $product->price12,"
                . " $product->price13,"
                . " $product->price14,"
                . " $product->price15,"
                . " '$product->description');";
        
        $res = $con->query($query);
        if ($res) {
            //uspesno dodat

        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function EditProductDB($id,$product){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        for($i=2;$i<=15;$i++){
            if($product->{"price$i"} == ""){
                $product->{"price$i"} = 'NULL';
            }
        }
        
        $query ="UPDATE `product` SET 
        `id`= '$product->id',
        `company`='$product->company',
        `name`='$product->name',
        `price1`=$product->price1,
        `price2`=$product->price2,
        `price3`=$product->price3,
        `price4`=$product->price4,
        `price5`=$product->price5,
        `price6`=$product->price6,
        `price7`=$product->price7,
        `price8`=$product->price8,
        `price9`=$product->price9,
        `price10`=$product->price10,
        `price11`=$product->price11,
        `price12`=$product->price12,
        `price13`=$product->price13,
        `price14`=$product->price14,
        `price15`=$product->price15,
        `description`='$product->description' 
        WHERE 
        id='$id'";
        
        $res = $con->query($query);
        if ($res) {

        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function DeleteProductDB($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        $res = $con->query("DELETE FROM `product` WHERE `product`.`id` ='$id'");
        if ($res) {
            //$res->close();            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetProcuctByID($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from product where id= '$id' ");
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            
            while ($row = $res->fetch_assoc()) {
                $line = $row;
            }
            // zatvaranje objekta koji cuva rezultat
          
            $product = new Product(
                    $line['id'],
                    $line['company'],
                    $line['name'],
                    $line['price1'],
                    $line['price2'],
                    $line['price3'],
                    $line['price4'],
                    $line['price5'],
                    $line['price6'],
                    $line['price7'],
                    $line['price8'],
                    $line['price9'],
                    $line['price10'],
                    $line['price11'],
                    $line['price12'],
                    $line['price13'],
                    $line['price14'],
                    $line['price15'],
                    $line['description']);
          
                        
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $product;
}



function GetProcuctsByCompany($company){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("select * from product where company= '$company' ");
        if ($res) {
            
            $products = array();
            while ($row = $res->fetch_assoc()) {
                
            $product = new Product(
                    $row['id'],
                    $row['company'],
                    $row['name'],
                    $row['price1'],
                    $row['price2'],
                    $row['price3'],
                    $row['price4'],
                    $row['price5'],
                    $row['price6'],
                    $row['price7'],
                    $row['price8'],
                    $row['price9'],
                    $row['price10'],
                    $row['price11'],
                    $row['price12'],
                    $row['price13'],
                    $row['price14'],
                    $row['price15'],
                    $row['description']);
                
            array_push($products, $product);
            }
          
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $products;
}

function GetAllBrandsDB(){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("SELECT DISTINCT company FROM `product` ORDER BY `product`.`company` ASC ");
        if ($res) {

            $brands = array();
            
            while ($row = $res->fetch_assoc()) {
                array_push($brands, $row['company']);
                
            }
            // zatvaranje objekta koji cuva rezultat
          
            return $brands;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

//*
//
//            ORDER
//
//*/
function InsertOrderDB($order){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        $res = $con->query(
                "INSERT INTO `orders` "
                . "(`id`,"
                . " `specification_id`,"
                . " `customer_id`,"
                . " `product_id`,"
                . " `count`)"
                . " VALUES "
                . "(NULL,"
                . " $order->specification_id,"
                . " $order->customer_id,"
                . " '$order->product_id',"
                . " $order->count"
                . ")");
        if ($res) {
            //uspesno dodat

        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

function GetOrderBySpecificationID($specID){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("SELECT * FROM `orders` WHERE specification_id = $specID");
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            
            $orders = array();
            while ($row = $res->fetch_assoc()) {              
                
            $order = new Order($row['id'],
                    $row['specification_id'],
                    $row['customer_id'],
                    $row['product_id'],
                    $row['count']);
                
                array_push($orders, $order);
    
            }
            
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $orders;
}


function DeleteOrdersBySpecificationDB($specification_id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        $res = $con->query("DELETE FROM `orders` WHERE specification_id = $specification_id");
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

//*
//
//            PAYMENT
//
//*/
function InsertPaymentDB($payment){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else{       
        $query = "INSERT INTO `payment` "
                . "(`id`,"
                . " `customer_id`,"
                . " `date`, "
                . "`value`,"
                . " `description`)"
                . " VALUES ("
                . "NULL,"
                . " $payment->customerID,"
                . " '$payment->date',"
                . " $payment->value,"
                . " '$payment->description')";
       
        
        $res = $con->query($query);
        
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}
function GetPaymentByIDDB($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("SELECT * FROM `payment` WHERE id = $id");
        if ($res) {
           
            $payments = array();
            while ($row = $res->fetch_assoc()) {              
                $payment = new Payment(
                        $row['id'], 
                        $row['customer_id'],
                        $row['date'],
                        $row['value'],
                        $row['description']);
                
            }
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $payment;
}

function GetPaymentByCustomerIDDB($id){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("SELECT * FROM `payment` WHERE customer_id = $id order by date");
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server

            $payments = array();
            while ($row = $res->fetch_assoc()) {              
                $payment = new Payment(
                        $row['id'], 
                        $row['customer_id'],
                        $row['date'],
                        $row['value'],
                        $row['description']);
                
                array_push($payments, $payment);
            }
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $payments;
}


function GetPaymentsByCustomerIDAndDateDB($id,$from,$to){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        if($id != NUll){
            $res = $con->query("SELECT * FROM payment WHERE customer_id='$id' and (date between '$from' and '$to' ) order by date");
        }else{
            $res = $con->query("SELECT * FROM payment WHERE (date between '$from' and '$to' )  order by date");
        }
        
        if ($res) {
            $line;
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server

            $payments = array();
            while ($row = $res->fetch_assoc()) {              
                $payment = new Payment(
                        $row['id'], 
                        $row['customer_id'],
                        $row['date'],
                        $row['value'],
                        $row['description']);
                
                array_push($payments, $payment);
            }
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $payments;
}


function DeletePaymentDB($id){
    $con = connectToBase();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        $query = "DELETE FROM `payment` WHERE id = $id";
       
        
        $res = $con->query($query);
        
        $id;
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}
/*
 * 
 *  ////    PRICELIST   //// 
 * 
 */

function GetPricelistNamesDB(){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        
        $res = $con->query("SELECT name FROM `pricelist_names`");
        if ($res) {

            $names = array();
            while ($row = $res->fetch_assoc()) {
                array_push($names, $row['name']);
            }
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
    return $names;
}


function EditPricelistnameByIDDB($id,$name){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        $query = "UPDATE `pricelist_names` SET `name` = '$name' WHERE `pricelist_names`.`id` = $id;";
        
        $res = $con->query($query);
        if ($res) {
            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}




//for debaging
function ReturnAllDB($table){
    $con = connectToBase();
    $array = array();
    if ($con->connect_errno) {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {       
        
        $res = $con->query("select * from $table");
        if ($res) {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
            // u redosledu u kom ga je vratio db server
            $i = 0;
            while ($row = $res->fetch_assoc()) {
                $niz[$i] = $row;
                $i++;
            }
            // zatvaranje objekta koji cuva rezultat
            
            return $niz;            
        }
        else
        {
            print ("Nije uneto u bazu!");
        }
    }
    $con->close();
}

