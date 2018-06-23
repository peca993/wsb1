<div class="container">
<form method="POST" action="index.php">
    <select name="customer" id="customer">            
        <option value="" >Sve firme</option>
        [[foreach $customers item=customer]]
            <option value="[[$customer]]">
            [[$customer]]
        </option>
        [[/foreach]]
    </select>   
    
    od:<input id="from" type="date" name="dateFrom" value="[[$dateFrom]]">
    do:<input id="to" type="date" name="dateTo" value="[[$dateTo]]">
    
    
    <button type="submit" name="searchSpecifications" class="btn btn-default"><b>Specifikacije</b><span class="glyphicon glyphicon-duplicate"></span></button>
    <button type="submit" name="searchPayments" class="btn btn-default"><b>Uplate</b><span class="glyphicon glyphicon-usd"></span></button>
    
    <h2 id="saldo">
        
    </h2>
</form>
</div>

<script>
    
    $(document).ready(function(){
    
        $('#customer,#from,#to').change(function(){
            if($('#customer').val() == ""){
                document.getElementById("saldo").innerHTML = "";
        }else{
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
            document.getElementById("saldo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","dinamyc.php?&saldo&customer="+$('#customer').val()+"&from="+$("#from").val()+"&to="+$("#to").val(),true);
        xmlhttp.send();
        
        }
         
        })
    
    });
    
</script>