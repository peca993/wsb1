<?php /* Smarty version Smarty-3.1.13, created on 2017-06-23 00:06:57
         compiled from "tpl/vratiSve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1570095997594ba2470afa68-86175004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec5ad2205a1dc6ca6b8804fad3ece9b70db8ccc' => 
    array (
      0 => 'tpl/vratiSve.tpl',
      1 => 1498169190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570095997594ba2470afa68-86175004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_594ba2470e4519_25028244',
  'variables' => 
  array (
    'baza' => 0,
    'base' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594ba2470e4519_25028244')) {function content_594ba2470e4519_25028244($_smarty_tpl) {?><html>

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
            <a onclick="scrollToBottom()" class="btn btn-outline-primary">Bottom</a>
        </div>
      </div>
    </div>
  </div>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - (0) : 0-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <p>a</p><br>
    <?php }} ?>
    
    
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

            
            <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <a onclick="scrollToTop()" class="btn btn-outline-primary">Top</a>
        </div>
      </div>
    </div>
  </div>
            
            <script>
                function scrollToBottom(){
                    document.body.scrollTop = document.body.scrollHeight;
                }
                
                function scrollToTop(){
                    window.scrollTo(0, 0);
                }
            </script>
            
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
  
</body>

</html><?php }} ?>