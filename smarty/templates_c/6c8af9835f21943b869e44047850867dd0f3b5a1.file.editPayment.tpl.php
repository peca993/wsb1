<?php /* Smarty version Smarty-3.1.13, created on 2017-09-19 19:27:51
         compiled from "tpl/editPayment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1709763464597e33b6657326-59999356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8af9835f21943b869e44047850867dd0f3b5a1' => 
    array (
      0 => 'tpl/editPayment.tpl',
      1 => 1501517875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1709763464597e33b6657326-59999356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597e33b66639f1_70771525',
  'variables' => 
  array (
    'payment' => 0,
    'customer' => 0,
    'customers' => 0,
    'line' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597e33b66639f1_70771525')) {function content_597e33b66639f1_70771525($_smarty_tpl) {?><h1>
    Izmena uplate
</h1>

    
<div class="container-fluid col-lg-12">        
<form action="index.php" method="POST" class="form-horizontal">
    
    <input name="oldPaymentID" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
">
    <input id="customerIDValue" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
">
    <div class="form-group">
      <label class="control-label col-sm-2" >Klijent:</label>
      <div class="col-sm-6">
          <select name="customerName"  id="customerName"  required>
        <option></option>
        <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
" > <?php echo $_smarty_tpl->tpl_vars['line']->value['name'];?>
 </option>
        <?php } ?>
    </select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Datum:</label>
      <div class="col-sm-6">
          <input name="date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->date;?>
" class="form-control" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Iznos:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="value" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->value;?>
" required onkeypress="return isNumberKey(event)">
          
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <input name="description" type="text" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->description;?>
"  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-6 col-sm-offset-2">
          <button type="submit" class="btn btn-default" name="editPayment">Izmeni</button>
      </div>
    </div>
    
    
    
    

</form>
</div>
    
<SCRIPT >
       
       function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       };
       
   $(document).ready(function(){
       $('#customerName').val($('#customerIDValue').val()).change();
   
   });
       
    </SCRIPT><?php }} ?>