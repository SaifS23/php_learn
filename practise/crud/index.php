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
    



    ?>
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Product</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>