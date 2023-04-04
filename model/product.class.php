<?php
class Product extends Db
{
    protected function getProducts()
    {
        $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,thuonghieu.tenthuonghieu, dienthoai.ID_dienthoai,dienthoai.ID_thuonghieu FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu and dienthoai.soluong <>'0'";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return "Record not found.";
        }
        $this->close();
    }

    protected function getProductsbyNumberPage($offset, $limit_per_page, $id_brand)
    {

        if ($id_brand == 0) {
            $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,thuonghieu.tenthuonghieu,dienthoai.ID_dienthoai FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu and dienthoai.soluong <>'0' LIMIT {$offset},{$limit_per_page}";
        } else {
            $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,thuonghieu.tenthuonghieu,dienthoai.ID_dienthoai FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu ='{$id_brand}' AND dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu and dienthoai.soluong <>'0' LIMIT {$offset},{$limit_per_page}";
        }
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    protected function getProductsByBrands($id_brand)
    {
        $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,dienthoai.ID_dienthoai FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu AND dienthoai.ID_thuonghieu ='{$id_brand}' and dienthoai.soluong <>'0'";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    protected function getProductsById($id)
    {
        $sql = "SELECT distinct dienthoai.Tendt,dienthoai.Anhdt,dienthoai.Motadt,thuonghieu.tenthuonghieu,baohanh.Tenbaohanh,khuyenmai.Sogiamgia,dienthoai.Giadt,dienthoai.ID_khuyenmai,dienthoai.ID_baohanh,dienthoai.Soluong
        from dienthoai,thuonghieu,baohanh,khuyenmai
        where dienthoai.ID_dienthoai = $id and dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu and dienthoai.ID_Baohanh = baohanh.ID_Baohanh and dienthoai.ID_khuyenmai=khuyenmai.id_khuyenmai and dienthoai.soluong <>'0'";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            $row = mysqli_fetch_array($result);
            return $row;
        }
        return false;
    }


    protected function updateProductQuantity($id, $quantity)
    {
        $sql = "update dienthoai
                set soluong = $quantity
                where ID_dienthoai = $id";
        if (mysqli_query($this->connect(), $sql)) {
            return true;
        } else return false;
    }
}
