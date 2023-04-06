<?php
class CartCtrl extends Cart
{
    public function inserCartCtrl(CartModel $cart)
    {
        return $this->insertCart($cart);
    }

    public function insertCartDetailCtrl(CartDetailModel $cart)
    {
        if ($this->insertDetailCart($cart)) {
            return true;
        } else {
            return false;
        }
    }
}
