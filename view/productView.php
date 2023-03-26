<?php
class ProductView extends Product
{

    public function getProductsView()
    {
        $result = $this->getProducts();
        if ($result != "Record not found.") {
            return $result;
        } else {
            return  "Record not found.";
        }
    }

    public function getProductsViewByBrandView($id_brand)
    {
        $result = $this->getProductsByBrands($id_brand);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function getProductViewByNumberPage($offset, $limit_per_page, $id_brand)
    {
        $result = $this->getProductsbyNumberPage($offset, $limit_per_page, $id_brand);
        if ($result) {
            return $result;
        }
        return false;
    }
}