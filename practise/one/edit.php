<?php
session_start();

$index = $_GET['index'];
$products=$_SESSION['productItem'][$index];
?>

<form action="./update.php?index=<?=$index?>" method="post">
    <input type="text" maxlength="3" name="id" placeholder="Enter ID" value="<?= $products['id']?>">
    <input type="text" name="title" placeholder="Enter Group" value="<?= $products['title']?>">
    <input type="text" name="detail" placeholder="Product Name" value="<?= $products['detail']?>">
    <button type="submit" style="background-color:aquamarine" >update</button>
</form>



