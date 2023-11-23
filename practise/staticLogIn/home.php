<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if($_SESSION['authentication'] = true){
    echo "H! ".$_SESSION['username']." welcome to Calculator";    
}
else{
    echo 'log in failed';
}
?>

<br><br>
<form action="cal.php" method="get">
    <input type="number" name="number1" placeholder="Input Number">
    <input type="number" name="number2" placeholder="Input Number"><br><br>
    <button type="submit" name="add">+</button>
    <button type="submit" name="sub">-</button>
    <button type="submit" name="result" value="*">*</button>
    <button type="submit" name="result" value="/">/</button>
    <button type="submit" name="result" value="xx">X<sup>2</sup></button>
    <button type="submit" name="result" value="out">Log out</button>
    <br><br>
</form>
    



</body>
</html>
