<?php /* Smarty version Smarty-3.1.13, created on 2017-08-21 15:35:59
         compiled from "tpl/editProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209871943259724189c2c175-67685388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1a83d62351d9ce28cd0866f71cf19ffae52ec85' => 
    array (
      0 => 'tpl/editProduct.tpl',
      1 => 1502885864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209871943259724189c2c175-67685388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59724189c43d11_80362498',
  'variables' => 
  array (
    'product' => 0,
    'brands' => 0,
    'brand' => 0,
    'pricelistNames' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59724189c43d11_80362498')) {function content_59724189c43d11_80362498($_smarty_tpl) {?><h1>
    Izmena proizvoda
</h1>

<div class="container-fluid col-lg-8">        
<form action="index.php" method="POST" class="form-horizontal">
    <input type="hidden" name="oldID" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" >
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Sifra:</label>
      <div class="col-sm-6">
          <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="form-control" maxlength="10" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" >Proizvodjac:</label>
      <div class="col-sm-6">
          <input list="brand" name='company' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->company;?>
" maxlength="40" required>
            <datalist id="brand">
         <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
" >
         <?php } ?>
            </datalist>
      </div>
    </div>
    

    <div class="form-group">
      <label class="control-label col-sm-2" >Naziv:</label>
      <div class="col-sm-6">
          <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
" class="form-control" maxlength="150" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[0];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price1" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price1;?>
" class="form-control" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[1];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price2" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price2;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[2];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price3" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price3;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[3];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price4" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price4;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[4];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price5" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price5;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[5];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price6" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price6;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[6];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price7" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price7;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[7];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price8" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price8;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[8];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price9" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price9;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[9];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price10" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price10;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[10];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price11" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price11;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[11];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price12" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price12;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[12];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price13" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price13;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[13];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price14" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price14;?>
" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[14];?>
:</label>
      <div class="col-sm-6">
          <input type="text" name="price15" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price15;?>
" class="form-control" >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <textarea name="description" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
" rows="4" cols="50" class="form-control" >
        </textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[14];?>
:</label>
      <div class="col-sm-6">
          <button class="btn btn-default" name="editProduct">Izmeni</button>
      </div>
    </div>

    
</form>
</div>
<?php }} ?>