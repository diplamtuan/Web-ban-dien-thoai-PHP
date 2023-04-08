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
      $sanpham->getInsertProduct($ID_th,$ID_ncc,$Tendt,$Anhdt,$Mota,$Gia,$soluong,$luotxem,$ID_km,$ID_bh);
      $file_name = basename($_FILES['Anhdt']['name']);

      // Tạo đường dẫn đến thư mục đích
      $target_path = "../../assets/img/" . $file_name;
      
      // Di chuyển tệp tin đến thư mục đích
      move_uploaded_file($_FILES['Anhdt']['tmp_name'], $target_path);
     
        echo 'Insert success';
   
  }else{
      echo 'failure';
  }
  
