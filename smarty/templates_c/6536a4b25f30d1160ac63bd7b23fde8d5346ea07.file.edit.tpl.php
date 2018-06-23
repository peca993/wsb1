<?php /* Smarty version Smarty-3.1.13, created on 2017-07-08 17:03:34
         compiled from "tpl/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1728239217595d003c447b01-63992655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6536a4b25f30d1160ac63bd7b23fde8d5346ea07' => 
    array (
      0 => 'tpl/edit.tpl',
      1 => 1499526205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728239217595d003c447b01-63992655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_595d003c458e30_24589979',
  'variables' => 
  array (
    'line' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d003c458e30_24589979')) {function content_595d003c458e30_24589979($_smarty_tpl) {?><form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="path" value="<?php echo $_smarty_tpl->tpl_vars['line']->value['path'];?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
">
    Firma:<input type="text" name="company" value="<?php echo $_smarty_tpl->tpl_vars['line']->value['company'];?>
"> <br>
    Datum:<input type="date" name="date" value="2015-05-06"> <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['line']->value['path'];?>
">Postojeca fakura</a>     <br>
    Nova faktura:<input type="file" name="newiInvoice" >     <br>
    
    <button type="submit" name="edit">Izmeni</button>
</form>
    <?php }} ?>