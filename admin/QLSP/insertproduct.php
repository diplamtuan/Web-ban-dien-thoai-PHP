<?php
include('../../model/db.class.php');
include '../../model/ADMINsanpham.class.php';
include '../../view/ADMINsanphamView.php';



// Get the user ID from the AJAX request
if(isset($_POST['ID_dienthoai']) && isset($_POST['id_thuonghieu']) 
&& isset($_POST['id_nhacungcap']) && isset($_POST['Tendt'])
 && isset($_POST['Anhdt']) && isset($_POST['Mota'])
  && isset($_POST['Gia']) && isset($_POST['soluong']) 
  && isset($_POST['luotxem']) && isset($_POST['id_baohanh']) && isset($_POST['id_km']) 
){
  $ID_dt = $_POST['ID_dienthoai'];
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
  // echo($ID_dt);
  // echo($ID_th);
  // echo($ID_ncc);
  // echo($Tendt);
  // echo($Anhdt);
  // echo($Mota);
  // echo($Gia);
  // echo($soluong);
  // echo($luotxem);
  echo($ID_bh);
  echo($ID_km);

}


?>
