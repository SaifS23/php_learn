<?php
session_start();

$index = $_GET['index'];
//print_r($index);

unset($_SESSION['productItem'][$index]);

$_SESSION['massage']='Deleted Successfully';

header('location: ./index.php');
// print_r($_SESSION['productItem'][$index]);