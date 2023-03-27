<?php
class Product extends Db
{
    protected function getProducts()
    {
        $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,thuonghieu.tenthuonghieu FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu";
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
            $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,thuonghieu.tenthuonghieu FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu LIMIT {$offset},{$limit_per_page}";
        } else {
            $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,thuonghieu.tenthuonghieu FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu ='{$id_brand}' AND dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu LIMIT {$offset},{$limit_per_page}";
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
        $sql = "SELECT distinct dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt FROM dienthoai,thuonghieu WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu AND dienthoai.ID_thuonghieu ='{$id_brand}'";
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
}
