<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>

    <?php

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
                <th>SL_N</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 0;
            foreach ($productIndex as $products){ 
            ?>
            <tr>
                <td><?= ++$sl?></td>
                <td><?= $products['title']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>