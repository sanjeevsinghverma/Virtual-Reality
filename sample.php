<!DOCTYPE html>
<html lang="en">
<head>

</head>

  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="vr";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo"Connected";
}
$sql = "INSERT INTO vr_table (Name, Product, Price, Quantity)
VALUES ('m', 'e', '1','2')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ";
}
mysqli_close($conn);
?>

</body>
</html>