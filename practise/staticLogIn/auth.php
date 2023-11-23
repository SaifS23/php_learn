<?php
session_start();

$username = 'sagor';
//echo $username;
$password = '1234';
//echo $password;

if(($username==$_POST['uName']) && ($password==$_POST['password'])){
    $_SESSION['authentication'] = true;
    $_SESSION['username'] = $_POST['uName'];
    
    //echo 'Welcome '.$_GET['uName'];
    header('Location: home.php');
}
else{

    $_SESSION['authentication'] = false;

    echo 'User Name or Password is Incorrect';
    //header('Location: index.php');
}


?>