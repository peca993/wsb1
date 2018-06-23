<script>

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
        <input type="hidden" name="editFlag" value="[[$editFlag]]">
        <input type="hidden" name='discount' value="[[$discount ]]">

    Proizvodjac:
        <select on name="brand" id="brand" required>
        <option value=""></option>
        [[foreach from=$brands item=brand]]
        <option value="[[$brand]]" > [[$brand]] </option>
        [[/foreach]]
        </select>

        Proizvod:<select id='name' name="name" required></select>

        Sifra:<input id='id'  name="id" type="text" size="10" required>

        Kolicina:<input name="count" type="text" value="1" size="5" required>

        <button type="submit"  name="addProduct" class="btn btn-default "><b>Dodaj</b>
            <span class="glyphicon glyphicon-plus"></span></button>
    </form><br><br><br>

    <form action="index.php" method="POST">
        <input type="hidden" name='discount' value="[[$discount ]]">
        <input type="hidden"  name="editFlag" value="[[$editFlag]]">
        <button type="submit" name="end" class="btn btn-success ">Gotovo
        <span class=" glyphicon glyphicon-ok"></span></button>

        <button type="submit"  class="btn btn-danger ">Ponisti
        <span class=" glyphicon  glyphicon-ban-circle"></span></button>
    </form><br><br><br>

</div>

<form action="index.php" method="POST">
<input type="hidden"  name="editFlag" value="[[$editFlag]]">
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

[[assign var=i value=0]]
[[assign var=num value=1]]
[[foreach $products item=line ]]

<tr>
    <td>[[$num ]]</td>
    <td>[[$line[0] ]]</td>
    <td>[[$line[1] ]]</td>
    <td>[[$line[2] ]]</td>
    <td>[[$line[3] ]]</td>
    <td><button type="submit" name="removeProduct" value="[[$i ]]" class="btn btn-default ">Ukloni
            <span class="glyphicon glyphicon-remove"></span></button></td>
</tr>
 <input type="hidden" name='discount' value="[[$discount ]]">

 [[$i = $i+1]]
 [[$num = $num+1]]

 [[/foreach]]
</tbody>
</table>
</form>
