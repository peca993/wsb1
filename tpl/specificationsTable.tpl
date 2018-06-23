<form action="index.php" method="POST" id="my_form">
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Firma</th>
          <th>Datum</th>
          <th>Iznos</a></th>
          <th>Opis</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
              
      
      <tbody>
       [[foreach from=$specifications item=line ]]  
                    <tr>
              <td>[[$line["id"] ]]</td>
              <td>[[$line["buyer"] ]]</td>
              <td>[[$line["date"] ]]</td>
              <td>[[$line["value"] ]]</td>
              <td>[[$line["description"] ]]</td>
              <td><button type="button"  name="showSpecTpl" onclick="window.open('[[$line['path'] ]]');" class="btn btn-default">Prikazi</button></td>
              <td>
                  <button type="submit" name="editSpecTpl"  class="btn btn-default" value='[[$line["id"] ]]' >Izmeni</button>
              </td>
              <td>
                  <button type="submit" name="deleteSpecTpl" class="btn btn-default" form="my_form" value='[[$line["id"] ]]' >Obrisi</button>
         
              </td>
            </tr>
        
        [[/foreach]]
      
      </tbody>
      
</table>
    </form>
