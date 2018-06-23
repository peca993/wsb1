<form action="index.php" method="POST">
    <input type="hidden" name="id" value="[[$id]]">
    <h1>Da li ste sigurni da zelite da obrisete uplatu?</h1>
    <button type="submit" name="deletePayment" value="yes" onclick="alert('Obrisano!')" class="btn btn-default">DA</button>
    <button type="submit" name="deletePayment" value="no" class="btn btn-default">NE</button>    
</form>