<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:33:00
         compiled from "tpl/insertPayment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:703769953597dc580efadd9-22765363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3795a15a495a96b7d996cafdc709929d7ce9d072' => 
    array (
      0 => 'tpl/insertPayment.tpl',
      1 => 1501517873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703769953597dc580efadd9-22765363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597dc580efe3f9_42658130',
  'variables' => 
  array (
    'customers' => 0,
    'customer' => 0,
    'today' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597dc580efe3f9_42658130')) {function content_597dc580efe3f9_42658130($_smarty_tpl) {?><h1>
    Uplata
</h1>

    
<div class="container-fluid col-lg-12">        
<form action="index.php" method="POST" class="form-horizontal">
   
    <div class="form-group">
      <label class="control-label col-sm-2" >Klijent:</label>
      <div class="col-sm-6">
    <select name="customerName"   required>
        <option></option>
        <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value){
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
" > <?php echo $_smarty_tpl->tpl_vars['customer']->value['name'];?>
 </option>
        <?php } ?>
    </select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Datum:</label>
      <div class="col-sm-6">
          <input name="date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
" class="form-control" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Iznos:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="payment" required onkeypress="return isNumberKey(event)">
          
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <input name="description" type="text"  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-6 col-sm-offset-2">
          <button type="submit" class="btn btn-default">Uplati</button>
      </div>
    </div>
    
    
    
    

</form>
</div>
    
<SCRIPT language=Javascript>
       
       function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       
    </SCRIPT><?php }} ?>