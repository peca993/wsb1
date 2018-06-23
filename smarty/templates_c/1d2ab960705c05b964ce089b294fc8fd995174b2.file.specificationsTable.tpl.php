<?php /* Smarty version Smarty-3.1.13, created on 2017-08-23 18:03:00
         compiled from "tpl/specificationsTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:940533528596e41239f1c80-93421289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d2ab960705c05b964ce089b294fc8fd995174b2' => 
    array (
      0 => 'tpl/specificationsTable.tpl',
      1 => 1503504155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940533528596e41239f1c80-93421289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596e4123bb1617_71645959',
  'variables' => 
  array (
    'specifications' => 0,
    'line' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596e4123bb1617_71645959')) {function content_596e4123bb1617_71645959($_smarty_tpl) {?><form action="index.php" method="POST" id="my_form">
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Firma</th>
          <th>Datum</th>
          <th>Iznos</a></th>
          <th>Opis</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
              
      
      <tbody>
       <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>  
                    <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["id"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["buyer"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["date"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["value"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["description"];?>
</td>
              <td><button type="button"  name="showSpecTpl" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['line']->value['path'];?>
');" class="btn btn-default">Prikazi</button></td>
              <td>
                  <button type="submit" name="editSpecTpl"  class="btn btn-default" value='<?php echo $_smarty_tpl->tpl_vars['line']->value["id"];?>
' >Izmeni</button>
              </td>
              <td>
                  <button type="submit" name="deleteSpecTpl" class="btn btn-default" form="my_form" value='<?php echo $_smarty_tpl->tpl_vars['line']->value["id"];?>
' >Obrisi</button>
         
              </td>
            </tr>
        
        <?php } ?>
      
      </tbody>
      
</table>
    </form>
<?php }} ?>