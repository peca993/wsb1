<h2>
    Izmena naziva cenovnika
</h2>

<div class="container-fluid col-lg-12">
<form action="index.php" method="POST" class="form-horizontal">
    

[[assign var=index value=1 ]]
[[foreach $pricelist item=pricename ]]


    <div class="form-group">
      <div class="col-sm-6">
          <input type="text" class="form-control" name="pricename[[$index]]" value="[[$pricename]]" required>
      </div>
    </div>
    
[[$index = $index+1 ]]
[[/foreach]]        


<div class="form-group">
      <div class="col-sm-6">
          <button type="submit" name="editPricelsit" class="btn btn-default ">Izmeni
            <span class="glyphicon "></span></button>
      </div>
    </div>

    </form>
</div>
        