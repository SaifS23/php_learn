<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>

    <?php
    // session_start();

    include_once './vendor/autoload.php';
    use Act\controllers\controller;
    $cntrl = new controller();

    $productIndex = $cntrl->index();
    // echo '<pre>';
    // print_r($productIndex);
    ?>

    <pre>
    <table border="1" style="color:blue;background-color:darkkhaki;font-size:large;">
        <thead>
            <tr>
                <th style="padding: 5px;">SL_N</th>
                <th style="padding: 5px;">Title</th>
                <th style="padding: 5px;">Details</th>
                <th style="padding: 5px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 0;
            foreach ($productIndex as $products){ 
            ?>
            <tr>
                <td style="padding: 3px;"><?= ++$sl?></td>
                <td style="padding: 3px;"><?= $products['title']?></td>
                <td><a href="./show.php?id=<?=$products['id']?>">Show</a></td>
                <td><a href="./edit.php?id=<?=$products['id']?>">edit</a></td>
                <td><a href="./delet.php?id=<?=$products['id']?>" onclick="return confirm('confirm delet')">Delet</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <a href="create.php" style="color:black;">Create</a>
    <?php
    if(isset($_SESSION['massage'])){
        echo $_SESSION['massage'];
        unset($_SESSION['massage']);
    }
    ?>
</body>
</html>