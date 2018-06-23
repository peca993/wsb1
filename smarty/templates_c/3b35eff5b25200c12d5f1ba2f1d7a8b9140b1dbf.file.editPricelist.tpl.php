<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:36:20
         compiled from "tpl/editPricelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1192804341597ef67053e5a8-82680808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b35eff5b25200c12d5f1ba2f1d7a8b9140b1dbf' => 
    array (
      0 => 'tpl/editPricelist.tpl',
      1 => 1501517874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192804341597ef67053e5a8-82680808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597ef670614955_37144068',
  'variables' => 
  array (
    'pricelist' => 0,
    'index' => 0,
    'pricename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597ef670614955_37144068')) {function content_597ef670614955_37144068($_smarty_tpl) {?><h2>
    Izmena naziva cenovnika
</h2>

<div class="container-fluid col-lg-12">
<form action="index.php" method="POST" class="form-horizontal">
    

<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['pricename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pricename']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pricelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pricename']->key => $_smarty_tpl->tpl_vars['pricename']->value){
$_smarty_tpl->tpl_vars['pricename']->_loop = true;
?>


    <div class="form-group">
      <div class="col-sm-6">
          <input type="text" class="form-control" name="pricename<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['pricename']->value;?>
" required>
      </div>
    </div>
    
<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
<?php } ?>        


<div class="form-group">
      <div class="col-sm-6">
          <button type="submit" name="editPricelsit" class="btn btn-default ">Izmeni
            <span class="glyphicon "></span></button>
      </div>
    </div>

    </form>
</div>
        <?php }} ?>