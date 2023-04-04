<?php
// session_start();
include("../DB/dbconnect.php");
// $user_query = "SELECT * FROM nhanvien";
// $user_query_run = $conn->query($user_query);
// if (mysqli_num_rows($user_query_run) > 0) {
//     $userdata = mysqli_fetch_array($user_query_run);
//     $name = $userdata['tennhanvien'];
// }

$sql_user = "SELECT * FROM khachhang";
$result = $conn->query($sql_user);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng</title>
</head>

<body>
    <table class="table">
        <h2>Khách hàng</h2>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên </th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Giới tính</th>
                <th scope="col">SĐT</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">Email</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"><button>Thêm</button></th>

            </tr>
        </thead>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['id_khachhang']; ?></th>
                    <td><?php echo $row['tenkhachhang']; ?></td>
                    <td><?php echo $row['diachi']; ?></td>
                    <td><?php echo $row['gioitinh']; ?></td>
                    <td><?php echo $row['sdt']; ?></td>
                    <td><?php echo $row['tentaikhoan']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['trangthai']; ?></td>
                    <td><button>Sửa</button></td>
                    <td><button>Tắt</button></td>

                </tr>
            <?php } ?>
            <button><a href="index.php?action=usersmanager">Quay lại</a></button>
</body>



</html>