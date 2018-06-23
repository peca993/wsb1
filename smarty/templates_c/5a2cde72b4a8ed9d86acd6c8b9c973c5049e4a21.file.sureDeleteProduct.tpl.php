<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:36:37
         compiled from "tpl/sureDeleteProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826180576597245d0899418-76412745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a2cde72b4a8ed9d86acd6c8b9c973c5049e4a21' => 
    array (
      0 => 'tpl/sureDeleteProduct.tpl',
      1 => 1501517875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826180576597245d0899418-76412745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597245d089e6f7_38882566',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597245d089e6f7_38882566')) {function content_597245d089e6f7_38882566($_smarty_tpl) {?><form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <h1>Da li ste sigurni da zelite da obrisete proizvod: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 ?</h1>
    <button type="submit" name="deleteProduct" value="yes" onclick="alert('Obrisano!')" class="btn btn-default">DA</button>
    <button type="submit" name="deleteProduct" value="no" class="btn btn-default">NE</button>    
</form><?php }} ?>