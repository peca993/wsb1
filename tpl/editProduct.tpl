<h1>
    Izmena proizvoda
</h1>

<div class="container-fluid col-lg-8">        
<form action="index.php" method="POST" class="form-horizontal">
    <input type="hidden" name="oldID" value="[[$product->id]]" >
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Sifra:</label>
      <div class="col-sm-6">
          <input type="text" name="id" value="[[$product->id]]" class="form-control" maxlength="10" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" >Proizvodjac:</label>
      <div class="col-sm-6">
          <input list="brand" name='company' class="form-control" value="[[$product->company ]]" maxlength="40" required>
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
          <input type="text" name="name" value="[[$product->name]]" class="form-control" maxlength="150" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[0] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price1" value="[[$product->price1]]" class="form-control" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[1] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price2" value="[[$product->price2]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[2] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price3" value="[[$product->price3]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[3] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price4" value="[[$product->price4]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[4] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price5" value="[[$product->price5]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[5] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price6" value="[[$product->price6]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[6] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price7" value="[[$product->price7]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[7] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price8" value="[[$product->price8]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[8] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price9" value="[[$product->price9]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[9] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price10" value="[[$product->price10]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[10] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price11" value="[[$product->price11]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[11] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price12" value="[[$product->price12]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[12] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price13" value="[[$product->price13]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[13] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price14" value="[[$product->price14]]" class="form-control" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[14] ]]:</label>
      <div class="col-sm-6">
          <input type="text" name="price15" value="[[$product->price15]]" class="form-control" >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Opis:</label>
      <div class="col-sm-6">
          <textarea name="description" value="[[$product->description]]" rows="4" cols="50" class="form-control" >
        </textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >[[$pricelistNames[14] ]]:</label>
      <div class="col-sm-6">
          <button class="btn btn-default" name="editProduct">Izmeni</button>
      </div>
    </div>

    
</form>
</div>
