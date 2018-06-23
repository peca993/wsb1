<?php /* Smarty version Smarty-3.1.13, created on 2017-07-19 16:42:49
         compiled from "tpl/proba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2026385665596f46407f3140-13657773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5c887b0bf50a760ca424d9c9620fec4d94600c' => 
    array (
      0 => 'tpl/proba.tpl',
      1 => 1500475365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2026385665596f46407f3140-13657773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596f46407f5530_53164606',
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596f46407f5530_53164606')) {function content_596f46407f5530_53164606($_smarty_tpl) {?>
<form>
    <select id="brand" name="users" onchange="showUser(this.value)" required>
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
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>


<script>
    
    $(document).ready(function(){
        $('#brand').change(function(){
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","proba.php?&q="+$('#brand').val(),true);
        xmlhttp.send();
        })});

    

</script>

<?php }} ?>