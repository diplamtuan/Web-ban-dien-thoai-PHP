<?php
include '../model/db.class.php';
include '../model/sanpham.class.php';
include '../view/sanphamView.php';

$sanphamAll = new sanphamview();
$result = $sanphamAll->getsanphamView();
foreach($result as $product){
    echo  $product['Tendt'];
}
?>