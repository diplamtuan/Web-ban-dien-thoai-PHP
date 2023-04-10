<?php
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (strpos($url, 'includes') !== false) {
    $path = "../DTO/";
} else {
    $path = "DTO/";
}
include  $path . 'CustommerModel.php';
class Custommer extends Db
{
    protected function getCustommerById($id)
    {
        $sql = "SELECT * FROM khachhang where id_khachhang='$id'";
        $result = mysqli_query($this->connect(), $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            return $row;
        } else return false;
    }

    protected function updateCustommerProfile(CustommerModel $custommer)
    {
        $id_kh = $custommer->getId();
        $tenkh = $custommer->getTenKH();
        $gioitinh = $custommer->getGioitinh();
        $diachi = $custommer->getDiachi();
        $sdt = $custommer->getSdt();
        $email = $custommer->getEmail();
        $sql = "UPDATE khachhang 
        set tenkhachhang = '$tenkh',gioitinh='$gioitinh',diachi='$diachi',sdt='$sdt',email='$email'
        where khachhang.id_khachhang = '$id_kh'";
        if (mysqli_query($this->connect(), $sql)) {
            return true;
        } else return false;
    }
}
