<h2>
    Unos klijenta
</h2>
<div class="container-fluid col-lg-12">
    <form action="index.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" >Naziv:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" name="name" required>
      </div>
    </div>
    
<div class="form-group">
    <label class="control-label col-sm-2" >Kategorija:</label>
      <div class="col-sm-6">
        <select name="category"  required>
        <option value="0">[[$pricelistNames[0] ]]</option>
        <option value="1">[[$pricelistNames[1] ]]</option>
        <option value="2">[[$pricelistNames[2] ]]</option>
        <option value="3">[[$pricelistNames[3] ]]</option>
        <option value="4">[[$pricelistNames[4] ]]</option>
        <option value="5">[[$pricelistNames[5] ]]</option>
        <option value="6">[[$pricelistNames[6] ]]</option>
        <option value="7">[[$pricelistNames[7] ]]</option>
        <option value="8">[[$pricelistNames[8] ]]</option>
        <option value="9">[[$pricelistNames[9] ]]</option>
        <option value="10">[[$pricelistNames[10] ]]</option>
        <option value="11">[[$pricelistNames[11] ]]</option>
        <option value="12">[[$pricelistNames[12] ]]</option>
        <option value="13">[[$pricelistNames[13] ]]</option>
        <option value="14">[[$pricelistNames[14] ]]</option>
        
        </select>
</div>
</div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Adresa:</label>
      <div class="col-sm-6">
          <input type="text" name="address" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Grad:</label>
      <div class="col-sm-6">
          <input type="text" name="city" class="form-control" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Postanski broj:</label>
      <div class="col-sm-6">
          <input type="text" name="postCode" class="form-control" required>
      </div>
    </div>    

    <div class="form-group">
      <label class="control-label col-sm-2" >Telefon:</label>
      <div class="col-sm-6">
          <input type="text" name="telNumber" class="form-control" >
      </div>
    </div>        
        
    <div class="form-group">
      <label class="control-label col-sm-2" >PIB:</label>
      <div class="col-sm-6">
          <input type="text" name="pib" class="form-control" >
      </div>
    </div>            
        
    <div class="form-group">
      <label class="control-label col-sm-2" >e-mail:</label>
      <div class="col-sm-6">
          <input type="email" name="email" class="form-control" >
      </div>
    </div>            
                
    <div class="form-group">
      <label class="control-label col-sm-2" >Broj tekuceg racuna:</label>
      <div class="col-sm-6">
          <input type="text" class="form-control" >
      </div>
    </div>
        
      <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-default" name="insertCustomer">Dodaj</button>
      </div>    
      </div>
    </form>
</div>
        
