<?php /* Smarty version Smarty-3.1.13, created on 2017-06-22 19:12:57
         compiled from "tpl/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:640863706594bb000090317-85481952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf7acbda4e697240d4b1b39f8e4ab891a5f0db7e' => 
    array (
      0 => 'tpl/insert.tpl',
      1 => 1498151570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '640863706594bb000090317-85481952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_594bb000092665_35643243',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594bb000092665_35643243')) {function content_594bb000092665_35643243($_smarty_tpl) {?><html>

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
            <form method="post" action="index.php">
            <div class="col-md-3" class="form-group"> <label>Value</label>
                <input name="value" type="text" class="form-control" placeholder="Enter value"> </div>
            <div class="col-md-12" class="form-group"> <label>Description</label>
                <input name="description" type="text" class="form-control" placeholder="Enter description"> </div>
                <input type="hidden" name="insert"><br>
                <div class="col-md-12"><button  type="submit" class="btn btn-primary">Insert</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html><?php }} ?>