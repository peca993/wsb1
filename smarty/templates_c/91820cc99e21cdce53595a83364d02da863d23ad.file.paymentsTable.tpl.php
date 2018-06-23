<?php /* Smarty version Smarty-3.1.13, created on 2017-08-23 20:39:16
         compiled from "tpl/paymentsTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1150578710597e26279ad266-23076874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91820cc99e21cdce53595a83364d02da863d23ad' => 
    array (
      0 => 'tpl/paymentsTable.tpl',
      1 => 1503513549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150578710597e26279ad266-23076874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597e26279ccd06_12454561',
  'variables' => 
  array (
    'payments' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597e26279ccd06_12454561')) {function content_597e26279ccd06_12454561($_smarty_tpl) {?><form action="index.php" method="POST" >
<div class="container">
  <h2>Uplate</h2>                              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>ID klijenta</th>
        <th>Datum</th>
        <th>Vrednost</th>
        <th>Opis</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
        
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['payment']->value->customerID;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['payment']->value->date;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['payment']->value->value;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['payment']->value->description;?>
</th>
          
        <th>
            <button type="submit" name="editPaymentTpl" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
">Izmeni <span class="glyphicon glyphicon-pencil"></span></button></th>
        <th>
            <button type="submit" name="deletePaymentTpl" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
" >Obirsi <span class="glyphicon glyphicon-remove"></span></button></th>
       </tr> 
        <?php } ?>
    </tbody>
  </table>
</div>
</form>
<?php }} ?>