<?php /* Smarty version Smarty-3.1.13, created on 2017-07-17 19:19:59
         compiled from "tpl/insertSpecification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1416216005596cb71685f267-53508593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1804c212c801bb6ed5a2b23e4a6a3880b21e3ddf' => 
    array (
      0 => 'tpl/insertSpecification.tpl',
      1 => 1500310016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1416216005596cb71685f267-53508593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596cb7168c5b21_05825164',
  'variables' => 
  array (
    'customers' => 0,
    'customer' => 0,
    'today' => 0,
    'brands' => 0,
    'brand' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596cb7168c5b21_05825164')) {function content_596cb7168c5b21_05825164($_smarty_tpl) {?><h1>
    Izrada specifikacije
</h1>
<form action="index.php" method="POST">
    Klijent:
    <select name="customer"   required>
        <option></option>
        <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value){
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
 </option>
        <?php } ?>
    </select><br>
    <br>
    Datum<input name="date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
"><br>

    Proizvodjac:
    <select name="brand" id="brand" required>
        <option></option>
        <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
 </option>
        <?php } ?>
    </select><br>
    
    Sifra:<input name="id" type="text"><br>
    
    
    Popust:  
    <select name='discount'>
                <option  value="0" >0%</option>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - (1) : 1-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
%</option>
            <?php }} ?>
    </select><br>
    
    <button type="submit" name="insertSpecification">Izradi</button>
</form>

    



<?php }} ?>