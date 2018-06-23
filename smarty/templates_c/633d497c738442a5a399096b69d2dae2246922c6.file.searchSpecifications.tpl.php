<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:28:59
         compiled from "tpl/searchSpecifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:396774552596e3c33d771d8-58350366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '633d497c738442a5a399096b69d2dae2246922c6' => 
    array (
      0 => 'tpl/searchSpecifications.tpl',
      1 => 1501517874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '396774552596e3c33d771d8-58350366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596e3c33e6a0c0_19393614',
  'variables' => 
  array (
    'customers' => 0,
    'customer' => 0,
    'dateFrom' => 0,
    'dateTo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596e3c33e6a0c0_19393614')) {function content_596e3c33e6a0c0_19393614($_smarty_tpl) {?><div class="container">
<form method="POST" action="index.php">
    <select name="customer" id="customer">            
        <option value="" >Sve firme</option>
        <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value){
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['customer']->value;?>

        </option>
        <?php } ?>
    </select>   
    
    od:<input id="from" type="date" name="dateFrom" value="<?php echo $_smarty_tpl->tpl_vars['dateFrom']->value;?>
">
    do:<input id="to" type="date" name="dateTo" value="<?php echo $_smarty_tpl->tpl_vars['dateTo']->value;?>
">
    
    
    <button type="submit" name="searchSpecifications" class="btn btn-default"><b>Specifikacije</b><span class="glyphicon glyphicon-duplicate"></span></button>
    <button type="submit" name="searchPayments" class="btn btn-default"><b>Uplate</b><span class="glyphicon glyphicon-usd"></span></button>
    
    <h2 id="saldo">
        
    </h2>
</form>
</div>

<script>
    
    $(document).ready(function(){
    
        $('#customer,#from,#to').change(function(){
            if($('#customer').val() == ""){
                document.getElementById("saldo").innerHTML = "";
        }else{
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
            document.getElementById("saldo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","dinamyc.php?&saldo&customer="+$('#customer').val()+"&from="+$("#from").val()+"&to="+$("#to").val(),true);
        xmlhttp.send();
        
        }
         
        })
    
    });
    
</script><?php }} ?>