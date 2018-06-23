<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:34:14
         compiled from "tpl/customersTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1813088108596e78ea7afdb7-25072504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0e26d09e487a833d843bb350ec8728651a6304' => 
    array (
      0 => 'tpl/customersTable.tpl',
      1 => 1501517873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1813088108596e78ea7afdb7-25072504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596e78ea839258_54216112',
  'variables' => 
  array (
    'customers' => 0,
    'customer' => 0,
    'pricelistNames' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596e78ea839258_54216112')) {function content_596e78ea839258_54216112($_smarty_tpl) {?><form action="index.php" method="POST" >
<div class="container">
  <h2>Tabela klijenata</h2>                              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Naziv</th>
        <th>Kategorija</th>
        <th>Adresa</th>
        <th>Grad</th>
        <th>Postanski broj</th>
        <th>Telefon</th>
        <th>PIB</th>
        <th>e-mail</th>
        <th>Tekuci racun</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value){
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
        
      <tr>    
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['name'];?>
</th>
        <th><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['customer']->value['category'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['pricelistNames']->value[$_tmp1];?>
</th>  
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['address'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['city'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['post_code'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['telephone_number'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['pib'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['customer']->value['current_account'];?>
</th>
        <th>
            <button type="submit" name="editCustomerTpl" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
">Izmeni <span class="glyphicon glyphicon-pencil"></span></button></th>
        <th>
            <button type="submit" name="deleteCustomerTpl" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['name'];?>
" >Obirsi <span class="glyphicon glyphicon-remove"></span></button></th>
       </tr> 
        <?php } ?>
    </tbody>
  </table>
</div>
</form><?php }} ?>