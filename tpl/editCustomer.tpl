<h2>
    Izmena klijenta
</h2>
<div class="container-fluid col-lg-12">
<form action="index.php" method="POST" class="form-horizontal">
    
    <input type="hidden" name="id" value="[[$customer->id]]">
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Naziv:</label>
      <div class="col-sm-6">
          <input type="text" name="name" value="[[$customer->name]]" required>
      </div>
    </div>
    
    
<div class="form-group">
    <label class="control-label col-sm-2" >Kategorija:</label>
      <div class="col-sm-6">
        <select id="categorySelect" name="category"  required>
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
    <input type="hidden" id="category" value="[[$customer->category]]">
        
        <div class="form-group">
      <label class="control-label col-sm-2" >Adresa:</label>
      <div class="col-sm-6">
          <input type="text" name="address" value="[[$customer->address]]" required>
      </div>
    </div>

        <div class="form-group">
      <label class="control-label col-sm-2" >Grad:</label>
      <div class="col-sm-6">
          <input type="text" name="city" value="[[$customer->city]]" required >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Postanski broj:</label>
      <div class="col-sm-6">
          <input type="text" name="postCode" value="[[$customer->postCode]]" required >
      </div>
    </div>    

    <div class="form-group">
      <label class="control-label col-sm-2" >Telefon:</label>
      <div class="col-sm-6">
          <input type="text" name="telNumber" value="[[$customer->telNumber]]">
      </div>
    </div>        

    <div class="form-group">
      <label class="control-label col-sm-2" >PIB:</label>
      <div class="col-sm-6">
          <input type="text" name="pib" value="[[$customer->pib]]">
      </div>
    </div>            

    <div class="form-group">
      <label class="control-label col-sm-2" >e-mail:</label>
      <div class="col-sm-6">
          <input type="text" name="email" value="[[$customer->email]]">
      </div>
    </div>            

    <div class="form-group">
      <label class="control-label col-sm-2" >Broj tekuceg racuna:</label>
      <div class="col-sm-6">
          <input type="text" name="currentAccount" value="[[$customer->currentAccount]]">
      </div>
    </div>
    
    <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-default" name="editCustomer">Izmeni</button>
      </div>    
      </div>
    </form>
</div>


<script>
    $(document).ready(function(){
        $('#categorySelect').val($('#category').val());
        
    });
</script>
