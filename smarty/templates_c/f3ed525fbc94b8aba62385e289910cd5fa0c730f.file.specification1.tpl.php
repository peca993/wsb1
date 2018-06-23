<?php /* Smarty version Smarty-3.1.13, created on 2017-08-17 17:49:05
         compiled from "tpl/specification1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130044539596cfb1e1c0231-76803119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ed525fbc94b8aba62385e289910cd5fa0c730f' => 
    array (
      0 => 'tpl/specification1.tpl',
      1 => 1502984930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130044539596cfb1e1c0231-76803119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596cfb1e1cfb09_04325382',
  'variables' => 
  array (
    'customers' => 0,
    'customer' => 0,
    'i' => 0,
    'today' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596cfb1e1cfb09_04325382')) {function content_596cfb1e1cfb09_04325382($_smarty_tpl) {?><h1>
    Izrada specifikacije
</h1><br><br><br><br>
    

<div class="container-fluid col-lg-12">
<form action="index.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Klijent:</label>
      <div class="col-sm-6">
    <select name="customer"   required>
        <option></option>
        <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value){
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
 </option>
        <?php } ?>
    </select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Popust:</label>
      <div class="col-sm-6">
          <select name='discount'>
                    <option  value="0" >0%</option>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - (1) : 1-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
%</option>
                <?php }} ?>
        </select>
      </div>
    </div>
    
            
    <div class="form-group">
      <label class="control-label col-sm-2" >Datum:</label>
      <div class="col-sm-2">
          <input name="date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
" class="form-control" required>
      </div>
    </div>
    
    

    <div class="form-group">
      <label class="control-label col-sm-2" >Napomena:</label>
      <div class="col-sm-6">
          <input name="description" type="text"  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
              <button class="btn btn-default" name="spec1"><b>Sledece</b></button>
      </div>    
      </div>

</form>
</div>


<?php }} ?>