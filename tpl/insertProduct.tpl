<h1>
    Unos proizvoda
</h1>

    
<div class="container-fluid col-lg-8">        
<form action="index.php" method="POST" class="form-horizontal">
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Sifra:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="id" maxlength="10" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Proizvodjac:</label>
      <div class="col-sm-6">
          <input list="brand" name='company' class="form-control" maxlength="40" required>
            <datalist id="brand">
         [[foreach from=$brands item=brand]]
         <option value="[[$brand]]" >
         [[/foreach]]
            </datalist>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Naziv:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="name" maxlength="150" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[0] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price1" onkeypress="return isNumberKey(event)" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[1] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price2" onkeypress="return isNumberKey(event)">
      </div>
    </div>    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[2] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price3" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[3] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price4" onkeypress="return isNumberKey(event)">
      </div>
    </div>        

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[4] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price5" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[5] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price6" onkeypress="return isNumberKey(event)">
      </div>
    </div>    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[6] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price7" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[7] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price8" onkeypress="return isNumberKey(event)">
      </div>
    </div>    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[8] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price9" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[9] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price10" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[10] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price11" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[11] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price12" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[12] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price13" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[13] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price14" onkeypress="return isNumberKey(event)">
      </div>
    </div>    

    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[14] ]]:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="price15" onkeypress="return isNumberKey(event)">
      </div>
    </div>        
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <textarea name="description" class="form-control"  rows="4" cols="50">
        </textarea>
          
      </div>
    </div>    

    <div class="form-group">  
        <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-default" name="insertProduct">Dodaj</button>
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
