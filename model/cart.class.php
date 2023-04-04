<?php
include '../DTO/CartModel.php';
include '../DTO/CartDetailModel.php';

class Cart extends Db
{
    protected function insertCart(CartModel $cart)
    {
        $conn = $this->connect();
        $id_khachhang = $cart->getID_khachhang();
        $id_nhanvien = $cart->getID_nhanvien();
        $Ngaydathang = $cart->getNgaydathang();
        $Tonggiatien = $cart->getTonggiatien();
        $Diachigiaohang = $cart->getDiachigiaohang();
        $Trangthaidonhang = $cart->getTrangthaidonhang();
        $Ngaygiaohang = $cart->getNgaygiaohang();
        $sql = "INSERT INTO donhang (ID_khachhang,ID_nhanvien,Ngaydathang,Tonggiatien,Diachigiaohang,Trangthaidonhang,NgayGiaoHang)
        VALUES('$id_khachhang','$id_nhanvien','$Ngaydathang','$Tonggiatien','$Diachigiaohang','$Trangthaidonhang','$Ngaygiaohang')";
        if (mysqli_query($conn, $sql)) {
            $order_id = mysqli_insert_id($conn);
            if ($order_id != 0) {
                return $order_id;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    protected function insertDetailCart(CartDetailModel $cart)
    {
        $id_donhang = $cart->getID_donhang();
        $id_dienthoai = $cart->getID_dienthoai();
        $soluong = $cart->getSoluong();
        $gia = $cart->getGia();
        $id_khuyenmai = $cart->getID_khuyenmai();
        $id_baohanh = $cart->getID_baohanh();
        $giasaukm = $cart->getGiasaukm();
        echo $id_donhang . "<br>";
        $sql = "INSERT into chitietdonhang(id_donhangnew,id_dienthoai,soluong,gia,ID_khuyenmai,ID_baohanh,Giasaukm) 
        VALUES('$id_donhang','$id_dienthoai','$soluong','$gia','$id_khuyenmai','$id_baohanh','$giasaukm')";
        if (mysqli_query($this->connect(), $sql)) {
            echo "success";
            return true;
        } else {
            echo "Error";
            return false;
        }
    }
}
