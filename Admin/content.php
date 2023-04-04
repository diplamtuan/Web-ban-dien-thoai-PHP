<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "usersmanager") {
        include("usermanager.php");
    }
    elseif($_GET['action'] == "nhanvien"){
        include("nhanvien.php");
    }  elseif($_GET['action'] == "khachhang"){
        include("khachhang.php");
    }
    else {
        include(__DIR__."/admindasboard.php");
    }
}

