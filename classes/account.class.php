<?php
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (strpos($url, 'function') !== false) {
    $path = "../DTO/";
} else {
    $path = "DTO/";
}
include $path . 'AccountModel.php';
class Account extends Db
{
    protected function insertAccount(AccountModel $account)
    {
        $tendangnhap = $account->getTendangnhap();
        $matkhau = $account->getMatKhau();
        $loaitaikhoan = $account->getLoaiTaiKhoan();
        $trangthai = $account->getTrangthai();
        $ngaytao = $account->getNgayTao();

        $sql = "INSERT into taikhoan (tendangnhap,matkhau,loaitaikhoan,trangthai,ngaytao) values ('$tendangnhap','$matkhau','$loaitaikhoan','$trangthai','$ngaytao')";
        if (mysqli_query($this->connect(), $sql)) {
            return true;
        } else {
            return false;
        }
    }
}
