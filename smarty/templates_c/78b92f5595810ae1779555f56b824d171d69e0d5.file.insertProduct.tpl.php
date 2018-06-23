<?php /* Smarty version Smarty-3.1.13, created on 2017-08-16 14:18:12
         compiled from "tpl/insertProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:339277684596ca955cbcb64-34390077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78b92f5595810ae1779555f56b824d171d69e0d5' => 
    array (
      0 => 'tpl/insertProduct.tpl',
      1 => 1502885823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339277684596ca955cbcb64-34390077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596ca955cbe817_78232247',
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
    'pricelistNames' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596ca955cbe817_78232247')) {function content_596ca955cbe817_78232247($_smarty_tpl) {?><h1>
    Unos proizvoda
</h1>

    
<div class="container-fluid col-lg-8">        
<form action="index.php" method="POST" class="form-horizontal">
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Sifra:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="id" maxlength="10" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Proizvodjac:</label>
      <div class="col-sm-6">
          <input list="brand" name='company' class="form-control" maxlength="40" required>
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
          <input type="text" class="form-control" name="name" maxlength="150" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[0];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price1" onkeypress="return isNumberKey(event)" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[1];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price2" onkeypress="return isNumberKey(event)">
      </div>
    </div>    
    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[2];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price3" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[3];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price4" onkeypress="return isNumberKey(event)">
      </div>
    </div>        

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[4];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price5" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[5];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price6" onkeypress="return isNumberKey(event)">
      </div>
    </div>    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[6];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price7" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[7];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price8" onkeypress="return isNumberKey(event)">
      </div>
    </div>    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[8];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price9" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[9];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price10" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[10];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price11" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[11];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price12" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[12];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price13" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[13];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price14" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" ><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[14];?>
:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price15" onkeypress="return isNumberKey(event)">
      </div>
    </div>        
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <textarea name="description" class="form-control"  rows="4" cols="50">
        </textarea>
          
      </div>
    </div>    

    <div class="form-group">  
        <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-default" name="insertProduct">Dodaj</button>
        </div>    
      </div>
    
</form>
</div>

<SCRIPT language=Javascript>
       
       function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       
    </SCRIPT>
<?php }} ?>