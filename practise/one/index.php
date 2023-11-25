<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data table with php</title>
</head>
<body>
    <?php
        session_start();
        
        $product = $_SESSION['productItem'];


    ?>
    
    <tr><a href="./add.php">add new</a></tr>

    <?php
        if(isset($_SESSION['massage'])){
            echo $_SESSION['massage'];
            unset($_SESSION['massage']);
        }
    ?>

<table border="1">
    <thead>
        <tr>
            <th>sl</th>
            <th>key</th>
            <th>name</th>
            <th>Details</th>
            <th>action</th>
        </tr>
        
    </thead>
    <tbody>
        <?php 
            $sl=0;
            foreach ($product as $key => $productItem){
        ?>
        
        <tr>
            <td><?= ++$sl?></td>
            <td><?= $productItem['id']?></td>
            <td><?php  echo $productItem['title'] ?></td>
            
            <td><a href="./detail.php">Show</a></td>
            <td><a href="./delet.php?index=<?= $key?>">delete</a></td>
        </tr>
       
        <?php } ?>

    </tbody>
</table>


</body>
</html>