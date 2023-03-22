<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "testingsystem";
$connect = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$connect) {
    die("Something went wrong;");
}
?>

