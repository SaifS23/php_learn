<?php

include_once './vendor/autoload.php';

use Act\controllers\controller;

$datacontroller = new controller;
$datacontroller->store($_POST);
//header('location: ./index.php');

?>