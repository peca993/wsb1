<?php /* Smarty version Smarty-3.1.13, created on 2017-07-21 17:25:56
         compiled from "tpl/productsTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1757630805596e8b6bb0ee57-13925927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5cfd89f0e5f2560336701949c1cb46d5cd23717' => 
    array (
      0 => 'tpl/productsTable.tpl',
      1 => 1500650749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757630805596e8b6bb0ee57-13925927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596e8b6bb116d4_43777279',
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596e8b6bb116d4_43777279')) {function content_596e8b6bb116d4_43777279($_smarty_tpl) {?><select id="brand">
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
</select><?php }} ?>