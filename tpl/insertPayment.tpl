<h1>
    Uplata
</h1>

    
<div class="container-fluid col-lg-12">        
<form action="index.php" method="POST" class="form-horizontal">
   
    <div class="form-group">
      <label class="control-label col-sm-2" >Klijent:</label>
      <div class="col-sm-6">
    <select name="customerName"   required>
        <option></option>
        [[foreach from=$customers item=customer]]
        <option value="[[$customer['id'] ]]" > [[$customer['name'] ]] </option>
        [[/foreach]]
    </select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Datum:</label>
      <div class="col-sm-6">
          <input name="date" type="date" value="[[$today]]" class="form-control" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Iznos:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="payment" required onkeypress="return isNumberKey(event)">
          
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <input name="description" type="text"  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-6 col-sm-offset-2">
          <button type="submit" class="btn btn-default">Uplati</button>
      </div>
    </div>
    
    
    
    

</form>
</div>
    
<SCRIPT language=Javascript>
       
       function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       
    </SCRIPT>