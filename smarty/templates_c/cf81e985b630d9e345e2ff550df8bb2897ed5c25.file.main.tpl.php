<?php /* Smarty version Smarty-3.1.13, created on 2017-06-22 12:41:09
         compiled from "tpl/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:927851923594ab43e15ae78-16194717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf81e985b630d9e345e2ff550df8bb2897ed5c25' => 
    array (
      0 => 'tpl/main.tpl',
      1 => 1498128056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '927851923594ab43e15ae78-16194717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_594ab43e3a7b16_75238248',
  'variables' => 
  array (
    'baza' => 0,
    'base' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594ab43e3a7b16_75238248')) {function content_594ab43e3a7b16_75238248($_smarty_tpl) {?><html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.github.io/templates/blank/theme.css" type="text/css"> </head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Value</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['base'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['base']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['baza']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['base']->key => $_smarty_tpl->tpl_vars['base']->value){
$_smarty_tpl->tpl_vars['base']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['base']->value['id'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['base']->value['date'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['base']->value['value'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['base']->value['description'];?>
</td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html><?php }} ?>