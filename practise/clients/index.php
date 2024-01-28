<!DOCTYPE html>
<head>
    <title>Clients</title>
</head>
<body>
    <?php

    include_once './vendor/autoload.php';
    use Tri\classcontroller;
    
    $clientindex = new classcontroller();
    $clienttable = $clientindex->index();

    echo '<pre>';
    echo print_r($clienttable);
    
    ?>


    <div style="width:500px">

    <table border="1px" style="background-color:blanchedalmond">
        <thead>
            <tr>
            <th>Sl.No. </th>
            <th>Clients_Name</th>
            <th>Contact_Number</th>
            <th>E-Mail</th>
            <th><Address>Address</Address></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 0;
            foreach ($clienttable as $clients){
            ?>
            <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            
            <?php 
                }
            ?>
        </tbody>
    </table>
    </div>
    
</body>
</html>