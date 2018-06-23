<?php /* Smarty version Smarty-3.1.13, created on 2017-08-19 14:43:45
         compiled from "tpl/editCustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:762734945971fda9859809-84465196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5837a32281ba962ba544acaba3b7ea6d6b099cc' => 
    array (
      0 => 'tpl/editCustomer.tpl',
      1 => 1503146510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762734945971fda9859809-84465196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5971fda985dbe5_88922012',
  'variables' => 
  array (
    'customer' => 0,
    'pricelistNames' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971fda985dbe5_88922012')) {function content_5971fda985dbe5_88922012($_smarty_tpl) {?><h2>
    Izmena klijenta
</h2>
<div class="container-fluid col-lg-12">
<form action="index.php" method="POST" class="form-horizontal">
    
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
">
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Naziv:</label>
      <div class="col-sm-6">
          <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->name;?>
" required>
      </div>
    </div>
    
    
<div class="form-group">
    <label class="control-label col-sm-2" >Kategorija:</label>
      <div class="col-sm-6">
        <select id="categorySelect" name="category"  required>
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
    <input type="hidden" id="category" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->category;?>
">
        
        <div class="form-group">
      <label class="control-label col-sm-2" >Adresa:</label>
      <div class="col-sm-6">
          <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->address;?>
" required>
      </div>
    </div>

        <div class="form-group">
      <label class="control-label col-sm-2" >Grad:</label>
      <div class="col-sm-6">
          <input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->city;?>
" required >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Postanski broj:</label>
      <div class="col-sm-6">
          <input type="text" name="postCode" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->postCode;?>
" required >
      </div>
    </div>    

    <div class="form-group">
      <label class="control-label col-sm-2" >Telefon:</label>
      <div class="col-sm-6">
          <input type="text" name="telNumber" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->telNumber;?>
">
      </div>
    </div>        

    <div class="form-group">
      <label class="control-label col-sm-2" >PIB:</label>
      <div class="col-sm-6">
          <input type="text" name="pib" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->pib;?>
">
      </div>
    </div>            

    <div class="form-group">
      <label class="control-label col-sm-2" >e-mail:</label>
      <div class="col-sm-6">
          <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
">
      </div>
    </div>            

    <div class="form-group">
      <label class="control-label col-sm-2" >Broj tekuceg racuna:</label>
      <div class="col-sm-6">
          <input type="text" name="currentAccount" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->currentAccount;?>
">
      </div>
    </div>
    
    <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-default" name="editCustomer">Izmeni</button>
      </div>    
      </div>
    </form>
</div>


<script>
    $(document).ready(function(){
        $('#categorySelect').val($('#category').val());
        
    });
</script>
<?php }} ?>