<?php /* Smarty version Smarty-3.1.13, created on 2017-07-05 19:42:50
         compiled from "tpl/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1000147555595bdd82225c97-18477874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82c845a8f7d376a8168bd580e3887b84b9cefe4d' => 
    array (
      0 => 'tpl/table.tpl',
      1 => 1499276437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1000147555595bdd82225c97-18477874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_595bdd822895c2_52261924',
  'variables' => 
  array (
    'lines' => 0,
    'line' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bdd822895c2_52261924')) {function content_595bdd822895c2_52261924($_smarty_tpl) {?><table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th><a href="index.php">Firma</a></th>
          <th><a href="index.php">Datum</a></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
              
      <tbody>
       <?php  $_smarty_tpl->tpl_vars["line"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["line"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["line"]->key => $_smarty_tpl->tpl_vars["line"]->value){
$_smarty_tpl->tpl_vars["line"]->_loop = true;
?>  
        <form action="index.php" method="POST">
            <input type="hidden" name="id" value='<?php echo $_smarty_tpl->tpl_vars['line']->value["id"];?>
'>
            <input type="hidden" name="path" value='<?php echo $_smarty_tpl->tpl_vars['line']->value["path"];?>
'>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["id"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["company"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['line']->value["date"];?>
</td>
              <td><button type="submit" name="download">Preuzmi</button></td>
              <td><button type="submit" name="editTpl">Izmeni</button></td>
              <td><button type="submit" name="deleteTpl">Obrisi</button></td>
            </tr>
        </form>
        <?php } ?>
      
      </tbody>
      
</table><?php }} ?>