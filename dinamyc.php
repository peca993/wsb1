<?php
include './Logic/DataBase.php';



error_reporting(-1);
ini_set('display_errors', 1);

//  When set brand then dinamycly load products
if(isset($_GET['brand'])){
  $brand = $_GET['brand'];


    $con = connectToBase();
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT name FROM product WHERE company='$brand' order by name";
    $result = mysqli_query($con,$sql);


    echo '<option value=""></option>';
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['name']."'>".$row['name']."</option>";

    }
    mysqli_close($con);
}

    
    if(isset($_GET['name'])){
  $name = $_GET['name'];

       $name =  str_replace('xo123Y','+',$name);
       $name =  str_replace('xo124Y','&',$name);
		

    $con = connectToBase();
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT id FROM product WHERE name='$name';";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        $id = $row['id'] ;
        
       }


       echo $id;
    mysqli_close($con);

   
    }
    
    

if(isset($_GET['brand_id'])){
  $id = $_GET['brand_id'];

    $con = connectToBase();
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM product WHERE id='$id' order by name";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        $brand = $row['company'] ;
        }
       
       echo $brand;
    mysqli_close($con);

   
    }
    
    

if(isset($_GET['name_id'])){
  $id = $_GET['name_id'];

    $con = connectToBase();
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM product WHERE id='$id'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        $name = $row['name'] ;
        }
       
       echo $name;
    mysqli_close($con);

   
    }
   

if(isset($_GET['product_id'])){
  $id = $_GET['product_id'];


    $con = connectToBase();
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT company FROM product WHERE id='$id'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        $brand = $row['company'];
    }
    

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT name FROM product WHERE company='$brand' order by name";
    $result = mysqli_query($con,$sql);


    echo '<option value=""></option>';
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['name']."'>".$row['name']."</option>";

    }
 
 
    mysqli_close($con);
}


if(isset($_GET['saldo'])){
    $customerName = $_GET['customer'];
    $from = $_GET['from'];
    $to = $_GET['to'];

    
    $con = connectToBase();
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,"ajax_demo");
    
    $sql="SELECT * FROM customer WHERE name='$customerName'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        $customerID = $row['id'];
    }
    $sql="SELECT value FROM specification WHERE buyer='$customerName' and (date between '$from' and '$to' )";
    $result = mysqli_query($con,$sql);
    $value = 0;
    while($row = mysqli_fetch_array($result)) {
        $value += $row['value'];
    }
    $sql="SELECT value FROM payment WHERE customer_id='$customerID' and (date between '$from' and '$to' )";
    $result = mysqli_query($con,$sql);
    $paid = 0;
    while($row = mysqli_fetch_array($result)) {
        $paid += $row['value'];
    }
    
    $summary = $value - $paid;
    
    
    

echo "<p>Saldo: $summary RSD</p>";
 
    mysqli_close($con);
}



?>
