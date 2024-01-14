<?php
session_start();

$index = $_GET['index'];
$products=$_SESSION['productItem'][$index];

$products=$_POST['id'];
$_SESSION['productItem'][$index]['title']=$_POST['title'];
$_SESSION['productItem'][$index]['detail']=$_POST['detail'];


$_SESSION['massage']='Updated Successfully';

header('location: ./index.php');

// echo '<pre>';
// print_r($_SESSION['productItem']);

?>