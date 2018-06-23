<?php /* Smarty version Smarty-3.1.13, created on 2017-08-11 16:58:44
         compiled from "tpl/insertCustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267754255596c987fc654d3-10056422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d7577a30a69b4616ba6c2eae7d01d73879b0a23' => 
    array (
      0 => 'tpl/insertCustomer.tpl',
      1 => 1502463472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267754255596c987fc654d3-10056422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596c987fc685d0_13833796',
  'variables' => 
  array (
    'pricelistNames' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596c987fc685d0_13833796')) {function content_596c987fc685d0_13833796($_smarty_tpl) {?><h2>
    Unos klijenta
</h2>
<div class="container-fluid col-lg-12">
    <form action="index.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" >Naziv:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="name" required>
      </div>
    </div>
    
<div class="form-group">
    <label class="control-label col-sm-2" >Kategorija:</label>
      <div class="col-sm-6">
        <select name="category"  required>
        <option value="0"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[0];?>
</option>
        <option value="1"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[1];?>
</option>
        <option value="2"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[2];?>
</option>
        <option value="3"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[3];?>
</option>
        <option value="4"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[4];?>
</option>
        <option value="5"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[5];?>
</option>
        <option value="6"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[6];?>
</option>
        <option value="7"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[7];?>
</option>
        <option value="8"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[8];?>
</option>
        <option value="9"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[9];?>
</option>
        <option value="10"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[10];?>
</option>
        <option value="11"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[11];?>
</option>
        <option value="12"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[12];?>
</option>
        <option value="13"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[13];?>
</option>
        <option value="14"><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[14];?>
</option>
        
        </select>
</div>
</div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Adresa:</label>
      <div class="col-sm-6">
          <input type="text" name="address" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Grad:</label>
      <div class="col-sm-6">
          <input type="text" name="city" class="form-control" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Postanski broj:</label>
      <div class="col-sm-6">
          <input type="text" name="postCode" class="form-control" required>
      </div>
    </div>    

    <div class="form-group">
      <label class="control-label col-sm-2" >Telefon:</label>
      <div class="col-sm-6">
          <input type="text" name="telNumber" class="form-control" >
      </div>
    </div>        
        
    <div class="form-group">
      <label class="control-label col-sm-2" >PIB:</label>
      <div class="col-sm-6">
          <input type="text" name="pib" class="form-control" >
      </div>
    </div>            
        
    <div class="form-group">
      <label class="control-label col-sm-2" >e-mail:</label>
      <div class="col-sm-6">
          <input type="email" name="email" class="form-control" >
      </div>
    </div>            
                
    <div class="form-group">
      <label class="control-label col-sm-2" >Broj tekuceg racuna:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" >
      </div>
    </div>
        
      <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-default" name="insertCustomer">Dodaj</button>
      </div>    
      </div>
    </form>
</div>
        
<?php }} ?>