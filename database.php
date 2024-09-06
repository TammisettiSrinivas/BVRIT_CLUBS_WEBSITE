

<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "sowmya";
$dbName = "loginsignup";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong: " . mysqli_connect_error());
}
?>

