<form action="index.php" method="POST">
Brend:<select name="brand">
    <option></option>
    [[foreach $brands item=brand]]
    <option value="[[$brand]]">[[$brand]]</option>
    [[/foreach]]
</select>
<button name="productsTable2Tpl" class="btn btn-default">Prikazi</button>
</form>
