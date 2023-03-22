<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ban_hang";
$connect = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$connect) {
    die("Something went wrong;");
}
?>
