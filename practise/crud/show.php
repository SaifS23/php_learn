<?php

include_once './vendor/autoload.php';
use Act\controllers\controller;

$productshow = new controller();
//print_r($productshow->show($_GET['id']));
$showdetail = $productshow->show($_GET['id']);

//echo $_GET['id'];
?>
<h1>Title : <?= $showdetail['title']?></h1>
<h5>Id : [<?= $showdetail['id']?>]</h5>
<a href="./index.php">List</a>