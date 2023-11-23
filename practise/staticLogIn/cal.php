<?php
session_start();


// if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $nmbr1 = $_GET['number1'];
    $nmbr2 = $_GET['number2'];

    function sum($nmbr1, $nmbr2){
        return $nmbr1 + $nmbr2;
    }
    function sub($nmbr1, $nmbr2){
        return $nmbr1 - $nmbr2;
    }

    if(isset($_GET['add'])){
        echo 'Sum = '.sum($nmbr1, $nmbr2);
    }
    elseif(isset($_GET['sub'])){
        echo 'Sub = '.sub($nmbr1, $nmbr2);
    }
    elseif($_GET['result'] == '*'){
        echo 'Mul = '.($nmbr1 * $nmbr2);
    }
    elseif($_GET['result'] == '/'){
        echo 'Div = '.($nmbr1/$nmbr2);
    }
    elseif($_GET['result'] == 'C'){
        echo '0';
    }

// }
// else{
//     echo 'not calculated';
// }

?>