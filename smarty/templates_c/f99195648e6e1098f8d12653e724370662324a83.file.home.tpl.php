<?php /* Smarty version Smarty-3.1.13, created on 2017-08-17 17:50:37
         compiled from "tpl/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931742639595d296f8e4050-91899364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99195648e6e1098f8d12653e724370662324a83' => 
    array (
      0 => 'tpl/home.tpl',
      1 => 1502985033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931742639595d296f8e4050-91899364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_595d296fb78f70_89892474',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d296fb78f70_89892474')) {function content_595d296fb78f70_89892474($_smarty_tpl) {?><div class="container-fluid ">
    <form action="index.php" method="POST">
        
        <div class="btn-group-vertical btn-group-lg col-lg-5" >    
            <button name="createSpecificationTpl" class="btn btn-default homeButton col-lg-6">Izradi specifikaciju
            <span class="glyphicon glyphicon-file"></span></button>
        
            <button name="searchSpecificationsTpl" class="btn btn-default homeButton col-lg-6">Kartice klijenata
            <span class="glyphicon glyphicon-credit-card"></span></button>
        
            <button name="insertPaymentTpl" class="btn btn-default homeButton col-lg-6 ">Uplata
            <span class="glyphicon glyphicon-euro"></span></button>
            
            <button name="insertCustomerTpl" id="op" class="btn btn-default homeButton col-lg-6 " >Dodaj klijenta
            <span class="glyphicon glyphicon-plus "></span><span class="glyphicon glyphicon-user "></span></button>
        
            <button name="customersTableTpl" class="btn btn-default homeButton col-lg-6">Klijenti
            <span class="glyphicon glyphicon-user "></span><span class="glyphicon glyphicon-user "></span></button>
        
            <button name="insertProductTpl" class="btn btn-default homeButton col-lg-6" >Dodaj proizvod
            <span class="glyphicon glyphicon-barcode"></span></button>
        
            <button name="searchProductsTpl" class="btn btn-default homeButton col-lg-6">Proizvodi
            <span class="glyphicon glyphicon-th-list"></span></button>
        
            <button name="editPricelistTpl" class="btn btn-default homeButton col-lg-6">Izmena naziva cenovnika
            <span class="glyphicon glyphicon-list-alt"></span></button>
        </div>    


<!--        
        <div class="col-lg-12" >    
            <img border="0" alt="WSB" src="style/images/wsb-logo.png" id="logo">
        </div>
-->    

    </form>
</div>


<script>
    $(document).ready(function(){
        $('#op').mohover(function(){
            $('#mySound').play('./style/sounds/hit-pipe.wav');
    })
    });
    

</script>
<?php }} ?>