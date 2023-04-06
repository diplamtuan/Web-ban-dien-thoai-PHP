<?php
include('../../model/db.class.php');
include '../../model/ADMINsanpham.class.php';
include '../../view/ADMINsanphamView.php';

include('../../DB/dbconnect.php');

$sanpham = new sanphamview();
if(isset($_POST['key']) && isset($_POST['ID_dienthoai']) &&  isset($_POST['id_thuonghieu'])
  && isset($_POST['id_nhacungcap']) && isset($_POST['Tendt'])
  && isset($_POST['Anhdt']) && isset($_POST['Mota'])
  && isset($_POST['Gia']) && isset($_POST['soluong'])
  && isset($_POST['luotxem']) && isset($_POST['id_baohanh']) && isset($_POST['id_km'])
){
  $key = $_POST['key'];
  $id_product = $_POST['ID_dienthoai'];
  $ID_th = $_POST['id_thuonghieu'];
  $ID_ncc = $_POST['id_nhacungcap'];
  $Tendt = $_POST['Tendt'];
  $Anhdt = $_POST['Anhdt'];
  $Mota = $_POST['Mota'];
  $Gia = $_POST['Gia'];
  $soluong = $_POST['soluong'];
  $luotxem = $_POST['luotxem'];
  $ID_bh = $_POST['id_baohanh'];
  $ID_km = $_POST['id_km'];
}
  
  if($key == 'edit'){
    $sanpham->getUpdataProduct($id_product,$ID_th,$ID_ncc,$Tendt,$Anhdt,$Mota,$Gia,$soluong,$luotxem,$ID_km,$ID_bh);
              echo 'Edit success';
         
  }
  else if( $key == 'insert'){
    $sql = "INSERT INTO `dienthoai` (`ID_dienthoai`, `ID_thuonghieu`, `ID_Nhacungcap`, `Tendt`, `Anhdt`, `Motadt`, `Giadt`, `Soluong`, `Luotxem`, `ID_khuyenmai`, `ID_baohanh`) VALUES (NULL, '3', '4', 'huawey ', 'xxx', 'r', 'r', '25', '25', '1', '1')";
              
       $row= mysqli_query($conn,$sql);
       echo 'Insert success';
  }else{
      echo 'failure';
  }
  
