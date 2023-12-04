<?php
session_start();

$index = $_GET['index'];

// $productDetail=$_SESSION['productItem'][$index];
// print_r($productDetail);

print_r($_SESSION['productItem'][$index]['detail']);

?>
