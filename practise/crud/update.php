<?php

include_once './vendor/autoload.php';

use Act\controllers\controller;

$datacontroller = new controller;
$datacontroller->update($_POST);

header('location: ./index.php');


?>