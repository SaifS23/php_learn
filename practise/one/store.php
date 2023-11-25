<?php
session_start();

$_SESSION['productItem'][]=[
    'id'=>$_POST['id'],
    'title'=>$_POST['title'],
    'detail'=>$_POST['detail'],
];

$_SESSION['massage']='Created Successfully';

header('location: ./index.php');

// echo '<pre>';
// print_r($_SESSION['productItem']);

?>