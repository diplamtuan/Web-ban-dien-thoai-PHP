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
}
