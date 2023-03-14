<?php
include('dbconnect.php');
$record_per_page = 2;
$page = '';
$output = '';
if (isset($_POST["page"])) {
    $page = $_POST["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $record_per_page;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // query($id);
} else {
    $id = "";
}
// echo($id);
 $sql_dienthoai = "SELECT * from thuonghieu, dienthoai where dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu AND  dienthoai.id_thuonghieu='$id' LIMIT $start_from, $record_per_page"; 
$query_dienthoai = mysqli_query($conn, $sql_dienthoai);


while ($row_dienthoai = mysqli_fetch_array($query_dienthoai)) {

    $output .= '
    <div class="col-md-5 col-sm-3">
    <img src="' . $row_dienthoai["Anhdt"] . '"  width="50px" height="50px">
    <p>' . $row_dienthoai["Tendt"] . '</p>  
    <p>' . $row_dienthoai["tenthuonghieu"] . '</p>  
    </div> ';
}
$output .= '</table><br /><div align="right">';
// $page_query = "SELECT * FROM dienthoai ORDER BY ID_dienthoai DESC";
$page_query = "SELECT * from thuonghieu, dienthoai where dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu AND  dienthoai.id_thuonghieu='$id' "; 

$page_result = mysqli_query($conn, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records / $record_per_page);
$total_pages = $total_records;
for ($i = 1; $i <= $total_pages; $i++) {
    $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='" . $i . "'>" . $i . "</span>";


}
// $output .= '</div><br /><br />';
echo $output;

function query($id) {
    echo ('page :' . $id);
}
?>