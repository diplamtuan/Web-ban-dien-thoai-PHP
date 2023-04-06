<?php
class Custommer extends Db
{
    protected function getCustommers()
    {
        $sql = "SELECT * FROM khachhang";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = array();
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    protected function insertCustommer($tenkhachhang, $diachi, $sdt, $email, $tentaikhoan, $mathau, $trangthai)
    {
        $sql = "INSERT into khachhang (tenkhachhang,diachi,sdt,email,tentaikhoan,mathau,trangthai) VALUES('$tenkhachhang','$diachi','$sdt','$email','$tentaikhoan',' $mathau','$trangthai')";
        if (mysqli_query($this->connect(), $sql)) {
            echo "Success";
        } else {
            echo "Error" . $this->connect()->error;
        }
    }
}
