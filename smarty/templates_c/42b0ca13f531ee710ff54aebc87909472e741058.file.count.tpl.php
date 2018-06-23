<?php /* Smarty version Smarty-3.1.13, created on 2017-06-22 19:38:33
         compiled from "tpl/count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:491207835594bbfbad86155-62175522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42b0ca13f531ee710ff54aebc87909472e741058' => 
    array (
      0 => 'tpl/count.tpl',
      1 => 1498153110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '491207835594bbfbad86155-62175522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_594bbfbad88328_47035023',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594bbfbad88328_47035023')) {function content_594bbfbad88328_47035023($_smarty_tpl) {?><html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.github.io/templates/blank/theme.css" type="text/css"> </head>

<body>
  <div class="bg-primary text-center d-flex h-100 align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-1 text-white">COUNT</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form action="index.php" method="post">
          <input name="count" type="hidden">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4"> <select name="month">
                <option value="all">Month</option>
                <option value="all">Svi</option>
                <option value="01">jan</option>
                <option value="02">feb</option>
                <option value="03">mar</option>
                <option value="04">apr</option>
                <option value="05">may</option>
                <option value="06">jun</option>
                <option value="07">jul</option>
                <option value="08">avg</option>
                <option value="09">sep</option>
                <option value="10">oct</option>
                <option value="11">nov</option>
                <option value="12">dec</option> 
               </select> </div>
              <div class="col-md-4"> <select name="year">
                    <option value="2017">Year</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>    
                </select> </div>
              <div class="col-md-4"> <select name="description">
                   <option value="0">all</option>
                   <option value="1">w/o desc</option>
               </select> </div>
            </div>
          </div>
          <input type="submit" name="submit" value="SUBMIT"> </form></div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html>

<?php }} ?>