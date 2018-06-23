<?php   

include './smarty/MySmarty.php';
include './TCPDF-master/tcpdf.php';
$smarty = new MySmarty();        
$smarty->clearAllAssign();
session_start();



$smarty->display('top.tpl');
//<body>
$smarty->display('navbar.tpl');

//////////////////**INCLUDES**/////////////////////
foreach (glob("Logic/*.php") as $filename)      //
{                                              //
    include $filename;                        //
}                                            //
//////////////////////////////////////////////

///////////////////// DEBUGING SECTION//////////////////////
/*
error_reporting(-1);
ini_set('display_errors', 1);
*/


/////////////////END OF DEBUGING SECTION////////////////////////

//-------------CUSTOMER---------------------------------------------------------// 

//  INSERT CUSTOMER TPL
if(isset($_POST['insertCustomerTpl'])){
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);
    $smarty->display('insertCustomer.tpl');
}else
    

//  INSERT CUSTOMER
if(isset($_POST["insertCustomer"])){
    $customer = new Customer(
            NULL,
            $_POST['name'],
            $_POST['category'],
            $_POST['address'],
            $_POST['city'],
            $_POST['postCode'],
            $_POST['telNumber'],
            $_POST['pib'],
            $_POST['email'],
            $_POST['currentAccount']);
    
    InsertCustomerDB($customer);
    header("Location: index.php");
}else
    
//  CUSTOMER TABLE TPL    
if(isset ($_POST['customersTableTpl'])){
    $customers = GetAllCustomersDB();
    $smarty->assign('customers', $customers);
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);
    $smarty->display('customersTable.tpl');
}else
    
//  EDIT CUSTOMER TPL
if(isset ($_POST['editCustomerTpl'])){
    $customerID = $_POST['editCustomerTpl'];
    $customer = GetCustomerByID($customerID);
    $smarty->assign('customer', $customer);
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);
    $smarty->display('editCustomer.tpl');
    
}else

//  EDIT CUSTOMER
if(isset ($_POST['editCustomer'])){
    $customer = new Customer(
            $_POST['id'],
            $_POST['name'],
            $_POST['category'],
            $_POST['address'],
            $_POST['city'],
            $_POST['postCode'],
            $_POST['telNumber'],
            $_POST['pib'],
            $_POST['email'],
            $_POST['currentAccount']);
    
    $id = $_POST['id'];
    
    UpdateCustomerByIDDB($id, $customer);
    
    
    $customers = GetAllCustomersDB();
    $smarty->assign('customers', $customers);
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);
    $smarty->display('customersTable.tpl');    
    
}else

    
//    DELETE CUSTOMER SURE TPL  
if(isset ($_POST['deleteCustomerTpl'])){
    $name = $_POST['deleteCustomerTpl'];
    $customer = GetCustomerByName($name);
    
    $smarty->assign('id', $customer->id);
    $smarty->assign('name', $name);
    $smarty->display('sureDeleteCustomer.tpl');
}else
    
    
//  DELETE CUSTOMER

if(isset ($_POST['deleteCustomer'])){
    if($_POST['deleteCustomer'] == 'yes'){
        $id = $_POST['id'];
        
        DeleteCustomerDB($id);
    }    
        $customers = GetAllCustomersDB();
        $smarty->assign('customers', $customers);    
        $priceList = GetPricelistNamesDB();
        $smarty->assign('pricelistNames', $priceList);
        $smarty->display('customersTable.tpl');
        
    
}else    
    

//------------PRODUCT------------------------------------------------------------//


//  INSERT PRODUCT TPL
if(isset($_POST["insertProductTpl"])){
    $brands = GetAllBrandsDB();
    $smarty->assign('brands', $brands);
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);
    
    $smarty->display('insertProduct.tpl');
}else
    
    
//  INSERT PRODUCT
if(isset($_POST["insertProduct"])){
    $product = new Product(
            $_POST['id'],
            $_POST['company'],
            $_POST['name'],
            $_POST['price1'], 
            $_POST['price2'], 
            $_POST['price3'],
            $_POST['price4'], 
            $_POST['price5'], 
            $_POST['price6'], 
            $_POST['price7'], 
            $_POST['price8'], 
            $_POST['price9'], 
            $_POST['price10'], 
            $_POST['price11'], 
            $_POST['price12'], 
            $_POST['price13'], 
            $_POST['price14'], 
            $_POST['price15'], 
            $_POST['description']);
    
    
    
    InsertProductDB($product);
    header("Location: index.php");
    
}else

//  EDIT PRODUCT
if(isset($_POST["editProduct"])){
    $product = new Product(
            $_POST['id'],
            $_POST['company'],
            $_POST['name'],
            $_POST['price1'], 
            $_POST['price2'], 
            $_POST['price3'],
            $_POST['price4'], 
            $_POST['price5'], 
            $_POST['price6'], 
            $_POST['price7'], 
            $_POST['price8'], 
            $_POST['price9'], 
            $_POST['price10'], 
            $_POST['price11'], 
            $_POST['price12'], 
            $_POST['price13'], 
            $_POST['price14'], 
            $_POST['price15'],
            $_POST['description']);
    
    $oldID = $_POST['oldID'];

	EditProductDB($oldID,$product);

    header("Location: index.php");
    
    
}else
    
    //  PRODUCT TABLE TPL1
if(isset ($_POST['searchProductsTpl'])){
    $bradns = GetAllBrandsDB();
    
    $smarty->assign('brands', $bradns);
    $smarty->display('productsTable1.tpl');
}else 

    //  PRODUCT TABLE TPL2
if(isset ($_POST['productsTable2Tpl'])){
    $brand = $_POST['brand'];
    $products = GetProcuctsByCompany($brand);
    
    $smarty->assign('products', $products);
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);
    
    $smarty->display('productsTable2.tpl');
}else     
    
//  EDIT PRODUCT
if(isset ($_POST['editProductTpl'])){
    $id = $_POST['editProductTpl'];
    $product = GetProcuctByID($id);
    $smarty->assign("product", $product);
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelistNames', $priceList);

    $smarty->display('editProduct.tpl');
    
   
}else    

//  DELETE PRODUCT SURE TPL
if(isset ($_POST['deleteProductTpl'])){
    $id = $_POST['deleteProductTpl'];
    
    $smarty->assign("id", $id);
    $smarty->display('sureDeleteProduct.tpl');
    
   
}else
 
//  DELETE PRODUCT 
if(isset ($_POST['deleteProduct'])){
    $id = $_POST['id'];
    $delete = $_POST['deleteProduct'];
    
    if($delete == 'yes'){
        
        DeleteProductDB($id);
    } 
    header("Location: index.php");
    
   
}else    

//------------SPECIFICATION-----------------------------------------------------//
    

//  SPECIFICATION 1 TPL
if(isset($_POST['createSpecificationTpl'])){    
    $customers = GetAllCustomersNamesDB();
    $smarty->assign("customers",$customers);
    $brands = GetAllBrandsDB();
    $smarty->assign("brands", $brands);
    $smarty->assign('today', date("Y-m-d"));
    $smarty->display('specification1.tpl');
}else

    //  SPECIFICATION 2 TPL
    
    if(isset($_POST['spec1'])){
        
    $_SESSION['customer'] = $_POST['customer'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['description'] = $_POST['description'];
    $_SESSION['brands'] = GetAllBrandsDB();
    $_SESSION['addedProducts'] = array();
    
    $brands = $_SESSION['brands'];
    $smarty->assign('brands', $brands);
    $smarty->assign('products', array());
    $smarty->assign('editFlag', -1);     // EDIT = 0
    $discount = $_POST['discount'];
    $smarty->assign('discount', $discount);
    
    
    $smarty->display('specification2.tpl');
    
}else
   
//  SPECIFICATION SEARCH TPL    
if(isset ($_POST['searchSpecificationsTpl'])){
    $customers = GetAllCustomersNamesDB();
    $smarty->assign("customers", $customers);
    $dateFrom = date("Y")."-01-01";
    $dateTo = date("Y")."-12-31";
    $smarty->assign('dateFrom', $dateFrom);
    $smarty->assign('dateTo', $dateTo);
    
    $smarty->display("searchSpecifications.tpl");
}else
        
if(isset($_POST['searchSpecifications'])){
    if($_POST['customer'] == ""){
        $buyer = NULL;
    }else
    {
        $buyer = $_POST['customer'];
    }
    
    if(isset($_POST['dateFrom'])){
        $dateFrom = $_POST['dateFrom'];
    } else {
        $dateFrom = NULL;
    }
 
        if(isset($_POST['dateTo'])){
        $dateTo = $_POST['dateTo'];
    } else {
        $dateTo = NULL;
    }

    $specifications = GetSpecificationsDB($buyer, $dateFrom, $dateTo);
    $smarty->assign("specifications", $specifications);
    $smarty->display('specificationsTable.tpl');
    
}else     

    
//      ADDING PRODUCTS

if(isset($_POST['addProduct'])){
    array_push($_SESSION['addedProducts'], array($_POST['brand'],$_POST['id'],$_POST['name'],$_POST['count']));
    $smarty->assign('products', $_SESSION['addedProducts']);    
    $brands = $_SESSION['brands'];
    $smarty->assign('brands', $brands);
        
    $smarty->assign('editFlag', $_POST['editFlag']);
    $discount = $_POST['discount'];
    $smarty->assign('discount', $discount);
    
    
    
    $smarty->display('specification2.tpl');    
}else

//      REMOVING PRODUCTS    
if(isset ($_POST['removeProduct'])){
    array_splice($_SESSION['addedProducts'], $_POST['removeProduct'],1);
    
    $smarty->assign('products', $_SESSION['addedProducts']);    
    $brands = $_SESSION['brands'];
    $smarty->assign('brands', $brands);
    
    $smarty->assign('editFlag', $_POST['editFlag']);
    $discount = $_POST['discount'];
    $smarty->assign('discount', $discount);
    
    $smarty->display('specification2.tpl');    
    
}else 

//  MAKE SPECIFICATION 
    
if(isset($_POST['end'])){

    
$order = $_SESSION['addedProducts'];
$customer = $_SESSION['customer'];
$date = $_SESSION['date'];
$description = $_SESSION['description'];
$editFlag = $_POST['editFlag'];
$discount = $_POST['discount'];
        
unset($_SESSION['addedProducts']);
//session_unset();

MakeAndIsnertSpecifications($customer, $date, $description, $order, $discount, $editFlag);
    
    
}else

//  EDIT SPECIFICATION
    if(isset ($_POST['editSpecTpl'])){
        $specID = $_POST['editSpecTpl'];
        $specification = GetSpecificationByID($specID);
        $order = GetOrderBySpecificationID($specID);
        
        $_SESSION['customer'] = $specification->buyer;
        $_SESSION['date'] = $specification->date;
        $_SESSION['description'] = $specification->description;
        $_SESSION['brands'] = GetAllBrandsDB();
        $_SESSION['discount'] = $specification->discount;
        
        
        
        $_SESSION['addedProducts'] = array();
        foreach ($order as $item){
            $product = GetProcuctByID($item->product_id);
            array_push($_SESSION['addedProducts'], array(
                $product->company,
                $product->id,
                $product->name,
                $item->count    
                    
            ));
        }
        
        
        
        $brands = $_SESSION['brands'];
        $smarty->assign('brands', $brands);
        $smarty->assign('products', $_SESSION['addedProducts']);
        $smarty->assign('discount', $specification->discount);
        $smarty->assign('editFlag', $specID);     // EDIT = 1


        $smarty->display('specification2.tpl');

        
    }else


//  DELETE SPECIFICATION SURE TPL 
if(isset ($_POST['deleteSpecTpl'])){
    $smarty->assign('id', $_POST['deleteSpecTpl']);
    $smarty->display('sureDelete.tpl');
    
}else
    
    
//  DELETE SPECIFICATION 
if(isset ($_POST['deleteSpec'])){
    if($_POST['deleteSpec'] == 'yes'){
        
        $id = $_POST['id'];
        DeleteSpecification($id);
        
    } 
    
    $customers = GetAllCustomersNamesDB();
    $smarty->assign("customers", $customers);
    $dateFrom = date("Y")."-01-01";
    $dateTo = date("Y")."-12-31";
    $smarty->assign("dateFrom", $dateFrom);
    $smarty->assign("dateTo", $dateTo);    
    
    $smarty->display("searchSpecifications.tpl");        
    
    
    
}else
    
//  PAYMENT---------------------

//  INSERT PAYMENT TPL

if(isset ($_POST['insertPaymentTpl'])){
    $customers = ReturnAllDB("customer");
    $smarty->assign('customers', $customers);
    $smarty->assign('today', date('Y-m-d'));
    $smarty->display('insertPayment.tpl');
}else    

//  INSERT PAYMENT

if(isset ($_POST['payment'])){
    $customerID = $_POST['customerName'];
    $date = $_POST['date'];
    $value = $_POST['payment'];
    $description = $_POST['description'];
    
    $payment = new Payment(NULL,
            $customerID,
            $date,
            $value,
            $description);
    
    InsertPaymentDB($payment);
    
    header('Location: index.php');
    
}else

//  SEARCH PAYMENTS    
    
if(isset ($_POST['searchPayments'])){
    if($_POST['customer'] != ""){
        $customer = GetCustomerByName($_POST['customer']);
        $customerID = $customer->id;   
    }else{
        $customerID = NULL;
    }
    
    $from = $_POST['dateFrom'];
    $to = $_POST['dateTo'];
    
    $payments = GetPaymentsByCustomerIDAndDateDB($customerID, $from, $to);
  
    $smarty->assign('payments', $payments);
    $smarty->display('paymentsTable.tpl');
    
}else    

//  EDIT PAYMENT TPL

if(isset ($_POST['editPaymentTpl'])){
    $payment = GetPaymentByIDDB($_POST['editPaymentTpl']);
    $customer = GetCustomerByID($payment->customerID);
    $customers = ReturnAllDB('customer');
    
    $smarty->assign('payment', $payment);
    $smarty->assign('customer', $customer);
    $smarty->assign('customers', $customers);
    
    $smarty->display('editPayment.tpl');
    
    
}else    
    

//  EDIT PAYMENT

if(isset ($_POST['editPayment'])){
    $oldID = $_POST['oldPaymentID'];
    $customerID = $_POST['customerName'];    //  it is a ID actualy
    $date = $_POST['date'];
    $value = $_POST['value'];
    $description = $_POST['description'];
   
    $payment = new Payment(
            NULL,
            $customerID,
            $date,
            $value,
            $description);
    
    DeletePaymentDB($oldID);
    InsertPaymentDB($payment);
    
    header('Location: index.php');
    
}else        
    
//  DELETE PAYMENT TPL

if(isset ($_POST['deletePaymentTpl'])){
    $id = $_POST['deletePaymentTpl'];
    $smarty->assign('id', $id);
    $smarty->display('sureDeletePayment.tpl');
}else

//  DELETE PAYMENT 

if(isset ($_POST['deletePayment'])){
    if($_POST['deletePayment'] == 'yes'){
        $id = $_POST['id'];
        DeletePaymentDB($id);
    }
    header('Location: index.php');
}else        
    
//  EDIT PRICELIST TPL
    
if(isset ($_POST['editPricelistTpl'])){
    $priceList = GetPricelistNamesDB();
    $smarty->assign('pricelist', $priceList);
    $smarty->display('editPricelist.tpl');
    
}else    

if(isset ($_POST['editPricelsit'])){
    $name1 = $_POST['pricename1'];
    EditPricelistnameByIDDB(1, $name1);
    $name2 = $_POST['pricename2'];
    EditPricelistnameByIDDB(2, $name2);
    $name3 = $_POST['pricename3'];
    EditPricelistnameByIDDB(3, $name3);
    $name4 = $_POST['pricename4'];
    EditPricelistnameByIDDB(4, $name4);
    $name5 = $_POST['pricename5'];
    EditPricelistnameByIDDB(5, $name5);
    $name6 = $_POST['pricename6'];
    EditPricelistnameByIDDB(6, $name6);
    $name7 = $_POST['pricename7'];
    EditPricelistnameByIDDB(7, $name7);
    $name8 = $_POST['pricename8'];
    EditPricelistnameByIDDB(8, $name8);
    $name9 = $_POST['pricename9'];
    EditPricelistnameByIDDB(9, $name9);
    $name10 = $_POST['pricename10'];
    EditPricelistnameByIDDB(10, $name10);
    $name11 = $_POST['pricename11'];
    EditPricelistnameByIDDB(11, $name11);
    $name12 = $_POST['pricename12'];
    EditPricelistnameByIDDB(12, $name12);
    $name13 = $_POST['pricename13'];
    EditPricelistnameByIDDB(13, $name13);
    $name14 = $_POST['pricename14'];
    EditPricelistnameByIDDB(14, $name14);
    $name15 = $_POST['pricename15'];
    EditPricelistnameByIDDB(15, $name15);
    
    header('Location: index.php');
}else
    
//  HOMEPAGE
if(isset($_GET['out'])){
     $_SESSION['username'] = '';
        $_SESSION['password'] = '';
        
        header('Location: index.php');
}else
    
if(isset ($_POST['username'])){
    if($_POST['username'] == 'wsb' && $_POST['password'] == 'wsbapp'){
        $_SESSION['username'] = 'wsb';
        $_SESSION['password'] = 'wsbapp';
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
    
}else    

    
if($_SESSION['username'] == 'wsb' && $_SESSION['password'] == 'wsbapp')    
{
     $smarty->display("home.tpl");
} else {
    $smarty->display('login.tpl');
}


//</body>
$smarty->display('bottom.tpl');

?>
      
