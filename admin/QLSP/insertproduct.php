<?php
include('../../model/db.class.php');
include '../../model/ADMINsanpham.class.php';
include '../../view/ADMINsanphamView.php';

include('../../DB/dbconnect.php');
$sanpham = new sanphamview();
if(isset($_POST['key']) && isset($_POST['ID_dienthoai']) &&  isset($_POST['id_thuonghieu'])
  && isset($_POST['id_nhacungcap']) && isset($_POST['Tendt'])
  // && isset($_FILES['Anhdt'])
   && isset($_POST['Mota'])
  && isset($_POST['Gia']) && isset($_POST['soluong'])
  && isset($_POST['luotxem']) && isset($_POST['id_baohanh']) && isset($_POST['id_km']) && isset($_POST['image'])
){
  $key = $_POST['key'];
  
  $id_product = $_POST['ID_dienthoai'];
  $ID_th = $_POST['id_thuonghieu'];
  $ID_ncc = $_POST['id_nhacungcap'];
  $Tendt = $_POST['Tendt'];
  // $Anhdt = $_FILES['Anhdt'];
  $Mota = $_POST['Mota'];
  $Gia = $_POST['Gia'];
  $soluong = $_POST['soluong'];
  $luotxem = $_POST['luotxem'];
  $ID_bh = $_POST['id_baohanh'];
  $ID_km = $_POST['id_km'];
}
// $Anhdt = $_FILES['Anhdt'];
// $filename = $Anhdt['name'];
// $filename = $_POST['image'];
if (isset($_FILES['Anhdt']) && ($_FILES['Anhdt']['name']) !== '') {
  $filename = $_FILES['Anhdt']['name'];
} else{
  $filename = $_POST['image'];
}
// echo $filename;
  // Check if the file was successfully uploaded
  // if($Anhdt['error'] !== UPLOAD_ERR_OK){
  //   echo 'Error uploading file';
  //   exit();
  // }
  
  // // Check file extension and size
  // $allowed_extensions = array('jpg', 'jpeg', 'png');
  // $max_file_size = 1024 * 1024; // 1MB
  
  // $file_extension = strtolower(pathinfo($Anhdt['name'], PATHINFO_EXTENSION));
  // if(!in_array($file_extension, $allowed_extensions)){
  //   echo 'Invalid file extension. Allowed extensions are: ' . implode(', ', $allowed_extensions);
  //   exit();
  // }
  
  // if($Anhdt['size'] > $max_file_size){
  //   echo 'File size exceeds the maximum allowed size of ' . $max_file_size . ' bytes.';
  //   exit();
  // }
  
  // // Move the uploaded file to a permanent location
  // $uploads_dir = 'a';
  // $destination = $uploads_dir . '/' . basename($Anhdt['name']);
  // if(move_uploaded_file($Anhdt['tmp_name'], $destination)){
  //   $filename = $destination;
  // }else{
  //   echo 'Error moving uploaded file';
  //   exit();
  // }

  if($_POST['key'] == 'edit'){ 
    $sanpham->getUpdataProduct($id_product,$ID_th,$ID_ncc,$Tendt,$filename,$Mota,$Gia,$soluong,$luotxem,$ID_km,$ID_bh);
    echo 'Edit success';  
  }
  else if( $_POST['key'] == 'insert'){
      $sanpham->getInsertProduct($ID_th,$ID_ncc,$Tendt,$filename,$Mota,$Gia,$soluong,$luotxem,$ID_km,$ID_bh);
        echo 'Insert success';
        
  }else{
      echo 'failure';
  }
  
  
 