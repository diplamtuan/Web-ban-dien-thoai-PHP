<?php
include '../model/db.class.php';
include '../model/product.class.php';
include '../view/productView.php';

$ProductView = new ProductView();
$output = "";
$output .= '<div class="row">';
$limit_per_pages = 6;

// $page = "";
// $id_brand = "";
if (isset($_GET['page_no'])) {
    $page = $_GET['page_no'];
} else {
    $page = 1;
}
// Lay id Brand;
if (isset($_GET['brand_no'])) {
    $id_brand =  $_GET['brand_no'];
} else {
    $id_brand = 0;
}

if (isset($_GET['input_search'])) {
    $input_value = $_GET['input_search'];
} else {
    $input_value = "";
}

$offset = ($page - 1) * $limit_per_pages;
if ($id_brand == 0) {
    if ($input_value == "") {
        $resultOffical = $ProductView->getProductViewByNumberPage($offset, $limit_per_pages, $id_brand);
    } else {
        $result = $ProductView->getProductsView();
        $resultOffical = filterSearch($result, $input_value);
    }
} else {
    if ($input_value == "") {
        $resultOffical = $ProductView->getProductViewByNumberPage($offset, $limit_per_pages, $id_brand);
    } else {
        $result = $ProductView->getProductsViewByBrandView($id_brand);
        $resultOffical = filterSearch($result, $input_value);
    }
}

function filterSearch($arrayOld, $keyword)
{
    $arrayNew = [];
    foreach ($arrayOld as $item) {
        $name = $item['Tendt'];
        // $brandName = $item['tenthuonghieu'];
        $price = $item['Giadt'];
        if (preg_match("/$keyword/i", $name) || preg_match("/$keyword/i", $price)) {
            $arrayNew[] = $item;
        }
    }
    return $arrayNew;
}
if ($resultOffical) {
    foreach ($resultOffical as $product) {
        $product_img = $product['Anhdt'];
        $product_name = $product['Tendt'];
        $product_desc = $product['Motadt'];
        $product_price = $product['Giadt'];

        $output .= "<div class='col-4'>
                    <div class='product-item'>
                        <div class='product-item_img'>
                            <img src='assets/img/{$product_img}' alt=''>
                        </div>
                        <div class='product-item-body'>
                            <h2>{$product_name}</h2>
                            <p>
                               {$product_desc}
                            </p>
                            <div class='product-item-body-price'>
                                <p>{$product_price}</p>
                                <p>{$product_price}</p>
                            </div>
                            <div class='product-item-body_control'>
                                <button>Đặt ngay</button>
                            </div>
                        </div>

                    </div>
                </div>
       ";
    }

    $output .= '</div>';
    if ($id_brand != 0) {
        if ($input_value == "") {
            $result_total = $ProductView->getProductsViewByBrandView($id_brand);
        } else {
            $result = $ProductView->getProductsViewByBrandView($id_brand);
            $result_total = filterSearch($result, $input_value);
        }
    } else {
        if ($input_value == "") {
            $result_total = $ProductView->getProductsView();
        } else {
            $result = $ProductView->getProductsView();
            $result_total = filterSearch($result, $input_value);
        }
    }
    $total_record = count($result_total);
    $total_pages = ceil($total_record / $limit_per_pages);

    $output .= '

<div class="pagination">
    <div class="pagination_controll back"><i class="fa-solid fa-arrow-left"></i></div>
    <div class="pagination_btn">';
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            $className = "active";
        } else {
            $className = "";
        }
        $output .= "
        <div class='{$className}' id='{$i}'>{$i}</div>
        ";
    }
    $output .= ' 
    </div>
    <div class="pagination_controll next"><i class="fa-solid fa-arrow-right"></i></div>
</div>';
    echo $output;
} else {
    echo "No Record Found.";
}
