<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:35:14
         compiled from "tpl/sureDeletePayment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:713241684597e4289f2cc56-88838227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3542014c15af7ac878a44757c15245f68ba7bf06' => 
    array (
      0 => 'tpl/sureDeletePayment.tpl',
      1 => 1501517874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '713241684597e4289f2cc56-88838227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597e4289f30c87_60624655',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597e4289f30c87_60624655')) {function content_597e4289f30c87_60624655($_smarty_tpl) {?><form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <h1>Da li ste sigurni da zelite da obrisete uplatu?</h1>
    <button type="submit" name="deletePayment" value="yes" onclick="alert('Obrisano!')" class="btn btn-default">DA</button>
    <button type="submit" name="deletePayment" value="no" class="btn btn-default">NE</button>    
</form><?php }} ?>