<?php
session_start();
include '../DB/dbconnect.php';
if (isset($_POST['register'])) {

    $username = $_POST['register']['username'];
    $address = $_POST['register']['address'];
    $phone = $_POST['register']['phone'];
    $email = $_POST['register']['email'];
    $pass = $_POST['register']['password'];

    // Kiem tra so dien thoai co giong nhau khong ?
    $check_phone_sql = "SELECT sdt from khachhang where khachhang.sdt='$phone'";
    // Kiem tra email co ton tai không ?
    $check_email_sql = "SELECT email from khachhang where khachhang.email= '$email'";
    if (mysqli_num_rows(mysqli_query($conn, $check_phone_sql))) {
        echo "Số điện thoại đã tồn tại";
    } else {
        if (mysqli_num_rows(mysqli_query($conn, $check_email_sql))) {
            echo "Email đã tồn tại";
        } else {
            $sql = "INSERT INTO khachhang(tenkhachhang,diachi,sdt,email,tentaikhoan,mathau,trangthai) VALUES('$username','$address' ,'$phone' ,'$email','$username','$pass','T')";
            if (mysqli_query($conn, $sql)) {
                echo "Đăng ký thành công";
                $conn->close();
            } else {
                echo "faild";
            }
        }
    }
    // // Them tai khoan khach hang
}
if (isset($_POST['login'])) {
    $username = $_POST['login']['username'];
    $pass = $_POST['login']['password'];
    
    // Kiem tra tai khoan dang nhap hop le hay khong ?
    $login_query = "SELECT *
    from khachhang
    where khachhang.tentaikhoan='$username' and khachhang.mathau = '$pass'";
    $login_query_run = mysqli_query($conn, $login_query);
    echo $pass;
    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['tentaikhoan'];
        $user_id = $userdata['id_khachhang'];
        $user_addr = $userdata['diachi'];
        $_SESSION['auth_user'] = [
            'username' => $username,
            'id_khachhang' =>  $user_id,
            'diachi' => $user_addr,
        ];
        echo "Đăng nhập thành công";
    } else {
        echo "Sai tài khoản hoặc mật khẩu";
    }
}
if (isset($_POST['logout'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    echo "Đăng xuất thành công";
}
