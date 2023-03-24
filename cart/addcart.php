<?php
session_start();
if (isset($_SESSION['cart'])) $_SESSION['cart']=[];
if (isset($_POST['addcart'])&&$_POST['addcart']){
$img = $_POST['img'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];

}
?>
