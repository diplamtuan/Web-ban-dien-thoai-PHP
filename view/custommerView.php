<?php
class CustommerView extends Custommer
{
    public function showCustommer()
    {
        $result = $this->getCustommers();
        foreach ($result as $value) {
            echo $value["tenkhachhang"];
            echo "<br>";
            echo $value["diachi"];
            echo "<br>";
            echo $value["sdt"];
            echo "<br>";
        }
    }
}
