<?php
class BrandView extends Brand
{
    public function getAllBrandsView()
    {
        $result = $this->getAllBrands();
        if ($result) {
            return $result;
        } else return false;
    }
}
