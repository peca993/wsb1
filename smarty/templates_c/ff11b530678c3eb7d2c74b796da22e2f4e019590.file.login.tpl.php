<?php /* Smarty version Smarty-3.1.13, created on 2017-07-31 18:25:51
         compiled from "tpl/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322775310594bea0512d641-62021499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff11b530678c3eb7d2c74b796da22e2f4e019590' => 
    array (
      0 => 'tpl/login.tpl',
      1 => 1501517875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322775310594bea0512d641-62021499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_594bea052d18d3_97866665',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594bea052d18d3_97866665')) {function content_594bea052d18d3_97866665($_smarty_tpl) {?><div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='index.php' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">Login</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="korisnicko iem">Korisnicko ime</label>
			      <div class="controls">
			        <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required>
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="lozinka">Lozinka</label>
			      <div class="controls">
                                  <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
                                  <button type="submit" class="btn btn-default">Login</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
<?php }} ?>