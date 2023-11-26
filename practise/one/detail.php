<?php
session_start();

$index = $_GET['index'];

print_r($_SESSION['productItem'][$index]['detail']);

?>
