<?php

include_once './vendor/autoload.php';
use Act\controllers\controller;

$productshow = new controller();
//print_r($productshow->show($_GET['id']));
$showdetail=$productshow->show($_GET['id']);

//echo $_GET['id'];
?>

<div style="width: 500px; margin: 0 auto">

<a href="./index.php">List</a>

<form action="./update.php" method="post">
    <input type="hidden" name="id" value="<?=$showdetail['id']?>">
    <input name="title" value="<?=$showdetail['title']?>" placeholder="put the title"/>
    <button type="submit">Update</button>
</form>
</div>