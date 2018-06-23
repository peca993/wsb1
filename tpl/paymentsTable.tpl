<form action="index.php" method="POST" >
<div class="container">
  <h2>Uplate</h2>                              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>ID klijenta</th>
        <th>Datum</th>
        <th>Vrednost</th>
        <th>Opis</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        [[foreach $payments item=payment ]]
        
      <tr>
        <th>[[$payment->id ]]</th>
        <th>[[$payment->customerID ]]</th>
        <th>[[$payment->date ]]</th>
        <th>[[$payment->value ]]</th>
        <th>[[$payment->description ]]</th>
          
        <th>
            <button type="submit" name="editPaymentTpl" class="btn btn-default" value="[[$payment->id ]]">Izmeni <span class="glyphicon glyphicon-pencil"></span></button></th>
        <th>
            <button type="submit" name="deletePaymentTpl" class="btn btn-default" value="[[$payment->id ]]" >Obirsi <span class="glyphicon glyphicon-remove"></span></button></th>
       </tr> 
        [[/foreach]]
    </tbody>
  </table>
</div>
</form>
