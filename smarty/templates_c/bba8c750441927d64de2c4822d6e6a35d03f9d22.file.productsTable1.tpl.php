<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:36:23
         compiled from "tpl/productsTable1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1869594748597233ed1af369-15249108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bba8c750441927d64de2c4822d6e6a35d03f9d22' => 
    array (
      0 => 'tpl/productsTable1.tpl',
      1 => 1501517874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1869594748597233ed1af369-15249108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597233ed30bdb0_20257276',
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597233ed30bdb0_20257276')) {function content_597233ed30bdb0_20257276($_smarty_tpl) {?><form action="index.php" method="POST">
Brend:<select name="brand">
    <option></option>
    <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</option>
    <?php } ?>
</select>
<button name="productsTable2Tpl" class="btn btn-default">Prikazi</button>
</form>
<?php }} ?>