<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:34:57
         compiled from "tpl/sureDelete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532081069595d2a5b9c6fb3-21332133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40aff02b04404b37dbd461ecdc6631473a00cd24' => 
    array (
      0 => 'tpl/sureDelete.tpl',
      1 => 1501517875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1532081069595d2a5b9c6fb3-21332133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_595d2a5ba03ef4_71277516',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a5ba03ef4_71277516')) {function content_595d2a5ba03ef4_71277516($_smarty_tpl) {?><form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <h1>Da li ste sigurni da zelite da obrisete specifikaciju <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 ?</h1>
    <button type="submit" name="deleteSpec" value="yes" onclick="alert('Obrisano!')" class="btn btn-default">DA</button>
    <button type="submit" name="deleteSpec" value="no" class="btn btn-default">NE</button>    
</form><?php }} ?>