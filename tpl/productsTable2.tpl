<form action="index.php" method="POST" >
<div class="container-fluid">
  <h2>Tabela proizvoda</h2>                              
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Naziv</th>
        <th>[[$pricelistNames[0] ]]</th>
        <th>[[$pricelistNames[1] ]]</th>
        <th>[[$pricelistNames[2] ]]</th>
        <th>[[$pricelistNames[3] ]]</th>
        <th>[[$pricelistNames[4] ]]</th>
        <th>[[$pricelistNames[5] ]]</th>
        <th>[[$pricelistNames[6] ]]</th>
        <th>[[$pricelistNames[7] ]]</th>
        <th>[[$pricelistNames[8] ]]</th>
        <th>[[$pricelistNames[9] ]]</th>
        <th>[[$pricelistNames[10] ]]</th>
        <th>[[$pricelistNames[11] ]]</th>
        <th>[[$pricelistNames[12] ]]</th>
        <th>[[$pricelistNames[13] ]]</th>
        <th>[[$pricelistNames[14] ]]</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        [[foreach $products item=product ]]
      <tr>    
        <th>[[$product->id ]]</th>
        <th>[[$product->name ]]</th>
        <th>[[$product->price1 ]]</th>
        <th>[[if !empty($product->price2)]] [[$product->price2]] [[/if]] </th>
        <th>[[$product->price3]]</th>
        <th>[[$product->price4]]</th>
        <th>[[$product->price5]]</th>
        <th>[[$product->price6]]</th>
        <th>[[$product->price7]]</th>
        <th>[[$product->price8]]</th>
        <th>[[$product->price9]]</th>
        <th>[[$product->price10]]</th>
        <th>[[$product->price11]]</th>
        <th>[[$product->price12]]</th>
        <th>[[$product->price13]]</th>
        <th>[[$product->price14]]</th>
        <th>[[$product->price15]]</th>
        <th>[[$product->description]]</th>
        
        <th>
            <button type="submit" name="editProductTpl" class="btn btn-default" value="[[$product->id ]]"><span class="glyphicon glyphicon-pencil"></span></button></th>
        <th>
            <button type="submit" name="deleteProductTpl" class="btn btn-default" value="[[$product->id ]]" ><span class="glyphicon glyphicon-remove"></span></button></th>
       </tr> 
        [[/foreach]]
    </tbody>
  </table>
</div>
</form>