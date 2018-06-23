<h1>
    Izrada specifikacije
</h1><br><br><br><br>
    

<div class="container-fluid col-lg-12">
<form action="index.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Klijent:</label>
      <div class="col-sm-6">
    <select name="customer"   required>
        <option></option>
        [[foreach from=$customers item=customer]]
            <option value="[[$customer]]" > [[$customer]] </option>
        [[/foreach]]
    </select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Popust:</label>
      <div class="col-sm-6">
          <select name='discount'>
                    <option  value="0" >0%</option>
                [[for $i=1 to 100]]
                    <option value="[[$i]]">[[$i]]%</option>
                [[/for]]
        </select>
      </div>
    </div>
    
            
    <div class="form-group">
      <label class="control-label col-sm-2" >Datum:</label>
      <div class="col-sm-2">
          <input name="date" type="date" value="[[$today]]" class="form-control" required>
      </div>
    </div>
    
    

    <div class="form-group">
      <label class="control-label col-sm-2" >Napomena:</label>
      <div class="col-sm-6">
          <input name="description" type="text"  class="form-control" >
      </div>
    </div>
    
    <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
              <button class="btn btn-default" name="spec1"><b>Sledece</b></button>
      </div>    
      </div>

</form>
</div>


