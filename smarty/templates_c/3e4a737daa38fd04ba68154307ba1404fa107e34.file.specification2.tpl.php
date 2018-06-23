<?php /* Smarty version Smarty-3.1.13, created on 2017-11-08 16:26:35
         compiled from "tpl/specification2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1972222053596cfd07a0a5c6-66067274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e4a737daa38fd04ba68154307ba1404fa107e34' => 
    array (
      0 => 'tpl/specification2.tpl',
      1 => 1510154786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1972222053596cfd07a0a5c6-66067274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_596cfd07a1c613_44735931',
  'variables' => 
  array (
    'editFlag' => 0,
    'discount' => 0,
    'brands' => 0,
    'brand' => 0,
    'products' => 0,
    'num' => 0,
    'line' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596cfd07a1c613_44735931')) {function content_596cfd07a1c613_44735931($_smarty_tpl) {?><script>

    //  when id change javascript change brand and id
    $(document).ready(function() {

        $('#id').change(function(){
        if($('#id').val() == ""){

                document.getElementById("brand").value = "";
                document.getElementById("name").value = "";
        }else{

            xmlhttp1 = new XMLHttpRequest();
            xmlhttp1.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("brand").value = this.responseText;
            }
        };

        xmlhttp2 = new XMLHttpRequest();
            xmlhttp2.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("name").value = this.responseText;
            }
        };

        xmlhttp3 = new XMLHttpRequest();
            xmlhttp3.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
            document.getElementById("name").innerHTML = this.responseText;
            }
        };
        xmlhttp3.open("GET","dinamyc.php?&product_id="+$('#id').val(),true);
        xmlhttp3.send();

        xmlhttp1.open("GET","dinamyc.php?&brand_id="+$('#id').val(),true);
        xmlhttp1.send();

        setTimeout(function () {
            xmlhttp2.open("GET","dinamyc.php?&name_id="+$('#id').val(),true);
            xmlhttp2.send();
        },200);






        }



        });


        $('#brand').change(function(){
            if($('#brand').val() == ""){
                document.getElementById("name").innerHTML = "";
                document.getElementById("id").innerHTML = "";
            }else{


                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("name").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","dinamyc.php?&brand="+$('#brand').val(),true);
                xmlhttp.send();

            }

        });


        $('#name').change(function(){

            if($('#name').val() == ""){
                document.getElementById("id").value = "";
            }else{


                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("id").value = this.responseText;
                    }
                };


                var name = document.getElementById('name').value;
                name = name.split("+").join("xo123Y");
                name = name.split("&").join("xo124Y");


                xmlhttp.open("GET","dinamyc.php?&name="+name,true);
                xmlhttp.send();

            }

        });






    });

</script>




<div class="container col-lg-12">
    <form action="index.php" method="POST">
        <input type="hidden" name="editFlag" value="<?php echo $_smarty_tpl->tpl_vars['editFlag']->value;?>
">
        <input type="hidden" name='discount' value="<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
">

    Proizvodjac:
        <select on name="brand" id="brand" required>
        <option value=""></option>
        <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
 </option>
        <?php } ?>
        </select>

        Proizvod:<select id='name' name="name" required></select>

        Sifra:<input id='id'  name="id" type="text" size="10" required>

        Kolicina:<input name="count" type="text" value="1" size="5" required>

        <button type="submit"  name="addProduct" class="btn btn-default "><b>Dodaj</b>
            <span class="glyphicon glyphicon-plus"></span></button>
    </form><br><br><br>

    <form action="index.php" method="POST">
        <input type="hidden" name='discount' value="<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
">
        <input type="hidden"  name="editFlag" value="<?php echo $_smarty_tpl->tpl_vars['editFlag']->value;?>
">
        <button type="submit" name="end" class="btn btn-success ">Gotovo
        <span class=" glyphicon glyphicon-ok"></span></button>

        <button type="submit"  class="btn btn-danger ">Ponisti
        <span class=" glyphicon  glyphicon-ban-circle"></span></button>
    </form><br><br><br>

</div>

<form action="index.php" method="POST">
<input type="hidden"  name="editFlag" value="<?php echo $_smarty_tpl->tpl_vars['editFlag']->value;?>
">
    <!-- ADDED PRODUCTS -->
<table class="table table-hover">
    <thead>
        <td>#</td>
        <td>Proizvodjac</td>
        <td>Sifra</td>
        <td>Naziv</td>
        <td>Kolicina</td>
        <td></td>
    </thead>

 <tbody>

<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>

<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['line']->value[0];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['line']->value[1];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['line']->value[2];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['line']->value[3];?>
</td>
    <td><button type="submit" name="removeProduct" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="btn btn-default ">Ukloni
            <span class="glyphicon glyphicon-remove"></span></button></td>
</tr>
 <input type="hidden" name='discount' value="<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
">

 <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
 <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>

 <?php } ?>
</tbody>
</table>
</form>
<?php }} ?>