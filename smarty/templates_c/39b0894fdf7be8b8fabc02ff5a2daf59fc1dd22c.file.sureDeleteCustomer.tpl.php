<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:36:13
         compiled from "tpl/sureDeleteCustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1343562505971fc6e72dfc2-94581319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b0894fdf7be8b8fabc02ff5a2daf59fc1dd22c' => 
    array (
      0 => 'tpl/sureDeleteCustomer.tpl',
      1 => 1501517875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343562505971fc6e72dfc2-94581319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5971fc6e736440_85137177',
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971fc6e736440_85137177')) {function content_5971fc6e736440_85137177($_smarty_tpl) {?><form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <h1>Da li ste sigurni da zelite da obrisete klijenta: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 ?</h1>
    <button type="submit" name="deleteCustomer" value="yes" onclick="alert('Obrisano!')" class="btn btn-default">DA</button>
    <button type="submit" name="deleteCustomer" value="no" class="btn btn-default">NE</button>    
</form><?php }} ?>