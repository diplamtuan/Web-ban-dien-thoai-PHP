<?php
include 'model/db.class.php';
include 'model/product.class.php';
include 'view/productView.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $productView = new ProductView();
    $productView->getProductsView();
    ?>
</body>

</html>