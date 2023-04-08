<?php
class ProductCtrl extends Product
{
    public function updateProductQuantityCtrl($id, $quantity)
    {
        if ($this->updateProductQuantity($id, $quantity)) {
            return true;
        }
        return false;
    }

    public function insertProductCtrl(ProductModel $product)
    {
        if ($this->insertProduct($product)) {
            return true;
        } else return false;
    }
}
