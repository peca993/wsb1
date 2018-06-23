<h1>
    Izmena uplate
</h1>

    
<div class="container-fluid col-lg-12">        
<form action="index.php" method="POST" class="form-horizontal">
    
    <input name="oldPaymentID" type="hidden" value="[[$payment->id ]]">
    <input id="customerIDValue" type="hidden" value="[[$customer->id ]]">
    <div class="form-group">
      <label class="control-label col-sm-2" >Klijent:</label>
      <div class="col-sm-6">
          <select name="customerName"  id="customerName"  required>
        <option></option>
        [[foreach from=$customers item=line]]
        <option value="[[$line['id'] ]]" > [[$line['name'] ]] </option>
        [[/foreach]]
    </select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Datum:</label>
      <div class="col-sm-6">
          <input name="date" type="date" value="[[$payment->date ]]" class="form-control" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Iznos:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="value" value="[[$payment->value ]]" required onkeypress="return isNumberKey(event)">
          
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <input name="description" type="text" value="[[$payment->description ]]"  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-6 col-sm-offset-2">
          <button type="submit" class="btn btn-default" name="editPayment">Izmeni</button>
      </div>
    </div>
    
    
    
    

</form>
</div>
    
<SCRIPT >
       
       function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       };
       
   $(document).ready(function(){
       $('#customerName').val($('#customerIDValue').val()).change();
   
   });
       
    </SCRIPT>