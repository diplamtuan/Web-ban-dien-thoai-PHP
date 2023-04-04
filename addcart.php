<?php
session_start();
include('DB/dbconnect.php');
global $conn;
if (isset($_POST['id_dt'])) {
    $id = $_POST['id_dt'];
    $sqlSelect = "SELECT ID_dienthoai, Tendt, Anhdt, tenthuonghieu, Giadt, Soluong
                    FROM dienthoai JOIN thuonghieu ON dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu
                    WHERE ID_dienthoai =" . $_POST['id_dt'];
    $result = $conn->query($sqlSelect);
    $row = $result->fetch_row();
    if (!isset($_SESSION['cart'])) {
        $cart[$id] = array(
            'Name' => $row[1],
            'Image' => $row[2],
            'Brand' => $row[3],
            'Price' => $row[4],
            'Quantity' => 1
        );
    } else {
        $cart = $_SESSION['cart'];
        if (array_key_exists($id, $cart)) {
            $cart[$id] = array(
                'Name' => $row[1],
                'Image' => $row[2],
                'Brand' => $row[3],
                'Price' => $row[4],
                'Quantity' => (int)$cart[$id]['Quantity'] + 1
            );
        } else {
            $cart[$id] = array(
                'Name' => $row[1],
                'Image' => $row[2],
                'Brand' => $row[3],
                'Price' => $row[4],
                'Quantity' => 1
            );
        }
    }
    $_SESSION['cart'] = $cart;
    // echo'<prE>';
    // print_r($_SESSION['cart']); 

    $Quantity = 0;
    $Total = 0;
    foreach ($cart as $value) {
        $Quantity += $value["Quantity"];
        $Total += (int)$value["Quantity"] * intval(str_replace('.', '', $value['Price']));
    }
    echo $Quantity . "-" . strval(number_format($Total, 0, '.', '.'));
}
?>
