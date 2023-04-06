<?php
class sanpham extends Db
{
// display catelogy 
protected function getCartegory(){
    $sql = "SELECT * from thuonghieu";
    $result = mysqli_query($this->connect(),$sql);
    $resultChech = mysqli_num_rows($result);
    $data = [];
    if($resultChech > 0){
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
        return $data;
    }else{
        return false;
    }
}
  

// display all product anf input == ''
    protected function getInforSP($offset, $limit_per_pages)
    {
        $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai where nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu ORDER BY ID_dienthoai ASC LIMIT $offset,$limit_per_pages";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    
    // display all product and input of search !=''
    protected function getInforSPProduct($input,$offset, $limit_per_pages)
    {
        $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai where nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu AND Tendt LIKE '%{$input}%' ORDER BY ID_dienthoai ASC LIMIT $offset,$limit_per_pages";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    // display all product of brand and input = ''
    protected function getSpBrand($id_brand,$offset, $limit_per_pages)
    {
        $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai  WHERE dienthoai.ID_thuonghieu ='$id_brand' AND nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu ORDER BY ID_dienthoai ASC LIMIT $offset,$limit_per_pages";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }
     // display all product of brand and !input = ''
     protected function getSpBrandInput($input,$id_brand,$offset, $limit_per_pages)
     {
         $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai  WHERE dienthoai.ID_thuonghieu ='$id_brand' AND nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu  AND Tendt LIKE '%{$input}%' ORDER BY ID_dienthoai ASC LIMIT $offset,$limit_per_pages";
         $result = mysqli_query($this->connect(), $sql);
         $resultCheck = mysqli_num_rows($result);
         $data = [];
         if ($resultCheck > 0) {
             while ($row = mysqli_fetch_array($result)) {
                 $data[] = $row;
             }
             return $data;
         } else {
             return false;
         }
     }

    

      // pagination all product and input of search == ''
      protected function getSanpham()
      {
          $sql = "SELECT * FROM dienthoai";
          $result = mysqli_query($this->connect(), $sql);
          $resultCheck = mysqli_num_rows($result);
          $data = [];
          if ($resultCheck > 0) {
              while ($row = mysqli_fetch_array($result)) {
                  $data[] = $row;
              }
              return $data;
          } else {
              return false;
          }
      }
      
      protected function getNhacungcap()
      {
          $sql = "SELECT * from nhacungcap";
          $result = mysqli_query($this->connect(), $sql);
          $resultCheck = mysqli_num_rows($result);
          $data = [];
          if ($resultCheck > 0) {
              while ($row = mysqli_fetch_array($result)) {
                  $data[] = $row;
              }
              return $data;
          } else {
              return false;
          }
      }
      protected function getKhuyenmai()
      {
          $sql = "SELECT * from khuyenmai";
          $result = mysqli_query($this->connect(), $sql);
          $resultCheck = mysqli_num_rows($result);
          $data = [];
          if ($resultCheck > 0) {
              while ($row = mysqli_fetch_array($result)) {
                  $data[] = $row;
              }
              return $data;
          } else {
              return false;
          }
      }
      protected function getBaohanh()
      {
          $sql = "SELECT * from baohanh";
          $result = mysqli_query($this->connect(), $sql);
          $resultCheck = mysqli_num_rows($result);
          $data = [];
          if ($resultCheck > 0) {
              while ($row = mysqli_fetch_array($result)) {
                  $data[] = $row;
              }
              return $data;
          } else {
              return false;
          }
      }
      protected function getAlldataProduct($id){
        $sql ="SELECT dienthoai.ID_dienthoai,dienthoai.ID_thuonghieu,dienthoai.ID_Nhacungcap,dienthoai.Tendt, dienthoai.Anhdt,dienthoai.Motadt,dienthoai.Giadt,dienthoai.Soluong,dienthoai.Luotxem,dienthoai.ID_khuyenmai,dienthoai.ID_baohanh, baohanh.Tenbaohanh,khuyenmai.tenkhuyenmai,thuonghieu.tenthuonghieu FROM dienthoai, thuonghieu, nhacungcap, baohanh, khuyenmai WHERE dienthoai.ID_thuonghieu = thuonghieu.id_thuonghieu AND dienthoai.ID_Nhacungcap = nhacungcap.id_nhacungcap AND dienthoai.ID_baohanh = baohanh.ID_Baohanh AND dienthoai.ID_khuyenmai = khuyenmai.id_khuyenmai AND dienthoai.ID_dienthoai=$id;
        ";
         $result = mysqli_query($this->connect(), $sql);
         $resultCheck = mysqli_num_rows($result);
         $data = [];
         if ($resultCheck > 0) {
             while ($row = mysqli_fetch_array($result)) {
                 $data[] = $row;
             }
             return $data;
         } else {
             return false;
         }
      }
        // pagination all product and input of search != ''
        protected function getSanpham_Input($input)
        {
            $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai  WHERE  nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu  AND Tendt LIKE '%{$input}%' ORDER BY ID_dienthoai ASC ";
            $result = mysqli_query($this->connect(), $sql);
            $resultCheck = mysqli_num_rows($result);
            $data = [];
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return false;
            }
        }
  
// paginatin display product in catelogy and input == ''
    protected function getSpBrandProduct($id_brand)
    {
        $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai  WHERE dienthoai.ID_thuonghieu ='$id_brand' AND nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu ORDER BY ID_dienthoai ASC ";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    // paginatin display product in catelogy and input != ''
    protected function getSpBrandProduct_input($input,$id_brand)
    {
        $sql = "SELECT * FROM nhacungcap,thuonghieu,dienthoai  WHERE dienthoai.ID_thuonghieu ='$id_brand' AND nhacungcap.id_nhacungcap = dienthoai.ID_Nhacungcap and dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu AND  Tendt LIKE '%{$input}%'  ORDER BY ID_dienthoai ASC ";
        $result = mysqli_query($this->connect(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $data = [];
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }
    protected function deleteSP($id_product){
        $sql = " DELETE FROM dienthoai where ID_dienthoai = $id_product";
        $result = mysqli_query($this->connect(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    // UPDATE dienthoai SET ID_thuonghieu=1,ID_Nhacungcap=1,Tendt='lehongthai',Anhdt='thai.jpg',Motadt='deptrai',Giadt=1200,Soluong=3,Luotxem=39,ID_khuyenmai=1,ID_baohanh=1 WHERE ID_dienthoai=17
    protected function UpdateProduct($id_product,$ID_th,$ID_ncc,$Tendt,$Anhdt,$Mota,$Gia,$soluong,$luotxem,$ID_km,$ID_bh){
        $sql = "UPDATE dienthoai SET ID_thuonghieu=$ID_th,ID_Nhacungcap=$ID_ncc,Tendt='$Tendt',Anhdt='$Anhdt',Motadt='$Mota',Giadt=$Gia,Soluong=$soluong,Luotxem=$luotxem,ID_khuyenmai=$ID_km,ID_baohanh=$ID_bh WHERE ID_dienthoai=$id_product";
        $result = mysqli_query($this->connect(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
