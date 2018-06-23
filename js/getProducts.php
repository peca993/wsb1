<?php
include './DataBase.php';

echo 'HELLO@!!!';

$brand = intval($_POST['brand']);

$con = connectToBase();
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT name FROM product WHERE company = '$brand'";
$result = mysqli_query($con,$sql);

echo "<select name='product' required>";
        
    
while($row = mysqli_fetch_array($result)) {
    echo "<option value='$row'>"
    . "$row"
    . "</option>";
}
echo "</select>";
mysqli_close($con);


?>
