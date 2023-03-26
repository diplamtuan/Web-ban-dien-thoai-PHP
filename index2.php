<?php
include 'model/db.class.php';
include 'model/custommer.class.php';
include 'view/custommerView.php';
include 'controller/custommerCtrl.php';

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
    header('Location:index.php');
    $custommerObj = new CustommerView();
    $custommerObj->showCustommer();

    $custommerObj2 = new CustommerCtrl();
    $custommerObj2->insertCustommer1();
    ?>
</body>

</html>