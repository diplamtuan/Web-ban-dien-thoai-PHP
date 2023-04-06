<?php
// $conn = mysqli_connect('localhost', 'root', '', 'projectphp');

include('../../model/db.class.php');
include '../../model/ADMINsanpham.class.php';
include '../../view/ADMINsanphamView.php';
$sanpham = new sanphamview();



// Get the user ID from the AJAX request
if(isset($_POST['id'])){
  $id = $_POST['id'];
}
// // Thực hiện truy vấn để lấy thông tin người dùng
// $query = "SELECT * FROM dienthoai WHERE ID_dienthoai = $id";
// $result = mysqli_query($conn, $query);
$result = $sanpham->getAlldataProductView($id);
// Trả về kết quả dưới dạng JSON

if ($result) {
  // $row = mysqli_fetch_assoc($result);
  $row = $result[0];
  $respons = array(
    'ID_dienthoai' => $row['ID_dienthoai'],
    'ID_thuonghieu' => $row['ID_thuonghieu'],
    'ID_ncc' => $row['ID_Nhacungcap'],
    'Tendt' => $row['Tendt'],
    'Anhdt' => $row['Anhdt'],
    'Motadt' => $row['Motadt'],
    'Giadt' => $row['Giadt'],
    'Soluong' => $row['Soluong'],
    'Luotxem' => $row['Luotxem'],
    'id_km' => $row['ID_khuyenmai'],
    'id_bh' => $row['ID_baohanh'],
  );
  echo json_encode($respons);
} else {
  echo json_encode(['error' => 'Truy vấn không thành công']);
}
?>

