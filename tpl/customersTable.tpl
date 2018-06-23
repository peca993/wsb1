<form action="index.php" method="POST" >
<div class="container">
  <h2>Tabela klijenata</h2>                              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Naziv</th>
        <th>Kategorija</th>
        <th>Adresa</th>
        <th>Grad</th>
        <th>Postanski broj</th>
        <th>Telefon</th>
        <th>PIB</th>
        <th>e-mail</th>
        <th>Tekuci racun</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        [[foreach $customers item=customer ]]
        
      <tr>    
        <th>[[$customer['id'] ]]</th>
        <th>[[$customer['name'] ]]</th>
        <th>[[$pricelistNames[ [[$customer['category'] ]]  ] ]]</th>  
        <th>[[$customer['address'] ]]</th>
        <th>[[$customer['city'] ]]</th>
        <th>[[$customer['post_code'] ]]</th>
        <th>[[$customer['telephone_number'] ]]</th>
        <th>[[$customer['pib'] ]]</th>
        <th>[[$customer['email'] ]]</th>
        <th>[[$customer['current_account'] ]]</th>
        <th>
            <button type="submit" name="editCustomerTpl" class="btn btn-default" value="[[$customer['id'] ]]">Izmeni <span class="glyphicon glyphicon-pencil"></span></button></th>
        <th>
            <button type="submit" name="deleteCustomerTpl" class="btn btn-default" value="[[$customer['name'] ]]" >Obirsi <span class="glyphicon glyphicon-remove"></span></button></th>
       </tr> 
        [[/foreach]]
    </tbody>
  </table>
</div>
</form>