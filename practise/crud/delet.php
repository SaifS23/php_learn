<?php

include_once './vendor/autoload.php';
use Act\controllers\controller;

$productshow = new controller();
//print_r($productshow->show($_GET['id']));
$showdetail = $productshow->delet($_GET['id']);
header('location: ./index.php');
//echo $_GET['id'];
?>
