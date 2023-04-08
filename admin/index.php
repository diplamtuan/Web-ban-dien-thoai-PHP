<?php
session_start();
if (!isset($_SESSION['auth']) && !isset($_SESSION['auth_user']['id_nhanvien'])) {
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main123.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
</head>

<body>
    <section id="sidebar">
        <a href="#" class="brand"><i></i> Logo</a>
        <ul class="side-menu">
            <li class="dashboard"><a href="#" class="active"><i class="bx bxs-dashboard icon"></i> Dashboard </a></li>
            <li class="divider">MAIN</li>
            <li class="manager">
                <a href="#"><i class="bx bxs-inbox icon"></i> Quản lý <i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Quản lý tài khoản</a></li>
                    <li><a href="#">Quản lý bảo hành</a></li>
                    <li><a href="#">Quản lý khuyến mãi</a></li>
                    <li><a href="#">Quản lý nhân viên</a></li>
                    <li><a href="#">Quản lý khách hàng</a></li>
                    <li><a href="#">Quản lý thương hiệu</a></li>
                    <li><a href="#">Quản lý nhà cung cấp</a></li>
                </ul>
            </li>
            <li class="productAdmin"><a href="#"><i class="bx bx-package icon active"></i> Sản phẩm </a></li>
            <li class="order"><a href="#"><i class="bx bx-clipboard icon"></i> Đơn hàng </a></li>
            <li class="coupon"><a href="#"><i class="bx bx-money-withdraw icon"></i> Phiếu nhập </a></li>
            <li class="divider">Table and forms</li>
            <!-- <li><a href="#"><i class="bx bx-table icon"></i> Tables </a></li> -->
            <li class="statistic">
                <a href="#"><i class="bx bxs-chart icon"></i> Thống kê<i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Thống kê hoá đơn</a></li>
                    <li><a href="#">Thống kê tổng tiền</a></li>
                    <li><a href="#">Thống kê sản phẩm</a></li>
                    <li><a href="#">Thống kê khách hàng</a></li>
                </ul>
            </li>
        </ul>
    </section>

    <!--NAVBAR-->
    <section id="content">
        <!--NAVBAR-->
        <nav>
            <i class="bx bx-menu toggle-sidebar" style="margin-right: auto;"></i>

            <!-- <a href="#" class="nav-link">
                <i class="bx bxs-bell"></i>
                <span class="badge">5</span>
            </a> -->
            <span class="divider"></span>
            <div class="profile">
                <img src="assets/img/tải xuống (2).png" alt="">
                <span class="user-name-text">
                    <?php
                    if (isset($_SESSION['auth_user'])) {
                        echo $_SESSION['auth_user']['username'];
                    }
                    ?>
                </span>
                <ul class="profile-link">
                    <li><a href="#"><i class="bx bxs-user-circle icon"></i>Profile</a></li>
                    <li><a href="#"><i class="bx bxs-cog icon"></i>Settings</a></li>
                    <li class="logout"><a href="#"><i class="bx bxs-log-out-circle icon"></i>Logout</a></li>
                </ul>
            </div>
        </nav>
        <!--NAVBAR-->
        <!--MAIN-->
        <main>



        </main>

        <!--MAIN-->
    </section>
    <!-- Modal -->
    <div class="modal fade product-add-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>
    <!--NAVBAR-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="assets/js/Admin.js"></script>

    <script>
        $(document).ready(function() {
            // Render Main
            function loadMain() {
                $.ajax({
                    url: 'main.php',
                    method: 'POST',
                    data: {
                        loadMain: 1,
                    },
                    success: function(data) {
                        $("main").html(data);
                    }
                })
            }
            loadMain();

            // Click main
            $(".dashboard").click(function() {
                loadMain();
            })
            $(".productAdmin").on("click", function() {
                // loadProduct();
                loadMainProduct();
            })

            // Render San pham
            function loadMainProduct() {
                $.ajax({
                    url: 'productAdmin.php',
                    method: 'POST',
                    data: {
                        loadMainProduct: 1,
                    },
                    success: function(data) {
                        $("main").html(data);
                        loadProduct();
                        loadPaginationProduct();
                    }
                })
            }

            function loadProduct(page_no) {
                $.ajax({
                    url: '../function/loadProductAdmin.php',
                    method: 'POST',
                    data: {
                        loadProductAdmin: 1,
                        page_no: page_no,
                    },
                    success: function(data) {
                        $(".product-wrapp").html(data);
                    }
                })
            }

            function loadPaginationProduct(page_no) {
                $.ajax({
                    url: '../function/loadProductAdmin.php',
                    method: 'POST',
                    data: {
                        loadPaginationProduct: 1,
                        page_no: page_no,
                    },
                    success: function(data) {
                        $(".pagination-product").html(data);
                    }
                })
            }

            $(document).on('click', ".product-page-no", function() {
                var id_page = $(this).text();
                loadProduct(id_page);
                loadPaginationProduct(id_page);
            })

            function removeActive() {
                var elements = $(".side-menu >li>a");
                for (var i = 0; i < elements.length; i++) {
                    elements[i].classList.remove('active');
                }
            }
            //    Render thêm background khi click vào
            $(document).on('click', '.side-menu >li >a', function() {
                removeActive();
                $(this).addClass('active');
            })


            // Khi an logout
            $('.logout').click(function() {
                $.ajax({
                    url: '../function/authcode.php',
                    method: 'POST',
                    data: {
                        logout: 1,
                    },
                    success: function(data) {
                        alert(data);
                        location.href = '../index.php';
                    }
                })
            })
            // Chọn file ảnh
            $(".file-input").change(function() {
                const file = $(this)[0].files[0];
                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();
                    reader.addEventListener('load', function() {
                        $('#image-preview')[0].src = reader.result;

                    })
                    reader.readAsDataURL(file);

                } else {
                    alert("Bạn phải chọn file ảnh");
                }
            })

            function checkValue(data) {
                if (data == "") {
                    return false;
                }
                return true;
            }
            // Load form them product
            function loadFormAddProduct() {
                $.ajax({
                    url: '../function/loadProductAdmin.php',
                    method: 'POST',
                    data: {
                        loadFormAddProduct: 1,
                    },
                    success: function(data) {
                        $(".product-add-form .modal-content").html(data);
                    }
                })
            }

            $(document).on('click', '.btn-add-product', function() {
                loadFormAddProduct()
            })
            // Submit product add form
            $(document).on('click', '.product-add-form .submit', function() {
                var tendt = $(".product-add-form .input-name").val();
                var mota = $(".product-add-form .input-desc").val();
                var img = $(".product-add-form .file-input").val();
                if (checkValue(tendt)) {
                    if (checkValue(img)) {
                        if (checkValue(mota)) {
                            var image_name = $(".product-add-form .file-input")[0].files[0].name;
                            var gia = $(".input-price").val();
                            var quantity = $(".input-quantity").val();
                            var khuyenmai = $(".input-khuyenmai").val();
                            var baohanh = $(".input-baohanh").val();
                            var brand = $('.input-brand').val();
                            var suppli = $('.input-suppli').val();
                            console.log(tendt, mota, image_name, gia, quantity, khuyenmai, baohanh, brand, suppli);
                            $.ajax({
                                url: '../function/loadProductAdmin.php',
                                method: 'POST',
                                data: {
                                    insertProduct: 1,
                                    tendt: tendt,
                                    mota: mota,
                                    image_name: image_name,
                                    gia: gia,
                                    quantity: quantity,
                                    khuyenmai: khuyenmai,
                                    baohanh: baohanh,
                                    brand: brand,
                                    suppli: suppli,
                                },
                                success: function(data) {
                                    alert(data);
                                    loadProduct(1);
                                    loadPaginationProduct(1);
                                    $(".product-add-form .close").click();
                                }

                            })
                        } else {
                            alert("Mời ghi mô tả");
                            $(".product-add-form .input-desc").focus();
                        }
                    } else {
                        alert("Mời chọn ảnh");
                    }
                } else {
                    alert("Chưa điền Tên điện thoại")
                    $(".product-add-form .input-name").focus();
                }

            })

        })
    </script>
</body>

</html>