<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:36:26
         compiled from "tpl/productsTable2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:679617958597237cc0e3cc3-43492380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ea1dc7cb3374f147f618dda64a131ec9759027' => 
    array (
      0 => 'tpl/productsTable2.tpl',
      1 => 1501517876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679617958597237cc0e3cc3-43492380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_597237cc0e4b94_57254700',
  'variables' => 
  array (
    'pricelistNames' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597237cc0e4b94_57254700')) {function content_597237cc0e4b94_57254700($_smarty_tpl) {?><form action="index.php" method="POST" >
<div class="container-fluid">
  <h2>Tabela proizvoda</h2>                              
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Naziv</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[0];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[1];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[2];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[3];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[4];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[5];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[6];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[7];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[8];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[9];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[10];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[11];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[12];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[13];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[14];?>
</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
      <tr>    
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price1;?>
</th>
        <th><?php if (!empty($_smarty_tpl->tpl_vars['product']->value->price2)){?> <?php echo $_smarty_tpl->tpl_vars['product']->value->price2;?>
 <?php }?> </th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price3;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price4;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price5;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price6;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price7;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price8;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price9;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price10;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price11;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price12;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price13;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price14;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->price15;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</th>
        
        <th>
            <button type="submit" name="editProductTpl" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><span class="glyphicon glyphicon-pencil"></span></button></th>
        <th>
            <button type="submit" name="deleteProductTpl" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" ><span class="glyphicon glyphicon-remove"></span></button></th>
       </tr> 
        <?php } ?>
    </tbody>
  </table>
</div>
</form><?php }} ?>