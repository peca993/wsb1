<?php /* Smarty version Smarty-3.1.13, created on 2017-07-05 19:42:46
         compiled from "tpl/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1666902241595d25164eaf14-83917910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de9d035e416c5fbe0aa708f62f182fc4167f216' => 
    array (
      0 => 'tpl/search.tpl',
      1 => 1499267848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1666902241595d25164eaf14-83917910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companies' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_595d251674cf52_76540639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d251674cf52_76540639')) {function content_595d251674cf52_76540639($_smarty_tpl) {?><form method="POST" action="index.php">
    <select name="company">            <!--  Mozda moze bolje tj da dozvoljava kucanje -->
        <option>Sve firme</option>
        <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
        <option>
            <?php echo $_smarty_tpl->tpl_vars['company']->value;?>

        </option>
        <?php } ?>
    </select>   
    
    <br>
    
    od:<input type="date" name="dateFrom">
    do:<input type="date" name="dateTo">
    
    <br>
    
    <button type="submit" name="search">Pretraga</button>
    
</form><?php }} ?>