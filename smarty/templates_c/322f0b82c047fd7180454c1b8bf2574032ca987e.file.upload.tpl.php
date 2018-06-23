<?php /* Smarty version Smarty-3.1.13, created on 2017-07-08 16:59:51
         compiled from "tpl/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1771229912595bcfc757d691-56756939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '322f0b82c047fd7180454c1b8bf2574032ca987e' => 
    array (
      0 => 'tpl/upload.tpl',
      1 => 1499525982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1771229912595bcfc757d691-56756939',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_595bcfc75810d8_90016769',
  'variables' => 
  array (
    'today' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bcfc75810d8_90016769')) {function content_595bcfc75810d8_90016769($_smarty_tpl) {?><form action="index.php" method="POST" enctype="multipart/form-data">
    Firma:<input type="text" name="company">     <br> 
    Datum:<input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
">     <br> 
    Faktura:<input type="file" name="file">     <br>
    <!--    <input name="value" type="number">  -->
    <button type="submit" name="upload">Upload</button>
</form>


    
  
<?php }} ?>