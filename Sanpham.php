<?php include "./DB/dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorke</title>
    <link rel="icon" href="./assets/img/logoicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- slick slider -->
    <link rel="stylesheet" href="./assets/css/lamtuan.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/thai.css">
</head>

<body>
    <!-- Header -->
    <div class="container header d-flex align-items-center justify-content-between sticky-top">
        <a class="header_logo" href="#">
            <img src="./assets/img/logovorke123.png" alt="">
        </a>
        <div class="header_nav d-none d-xl-block">
            <a class="header_name" href="#">Điện Thoại</a>
            <a class="header_name" href="#">Sản phẩm IoT</a>
            <a class="header_name" href="#">Về Vorke</a>
            <button class="header_name header_nav-btn position-relative">Đơn hàng
                <!-- <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-secondary">10
                    <span class="visually-hidden">unread messages</span></span> -->
            </button>
            <a class="header_name" href="#">Đăng ký/ Đăng nhập</a>
        </div>

        <!-- Search -->
        <div class="mobile-toggler">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>


        <!-- Mobile bars icon -->
        <div class="mobile-toggler d-xl-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

    </div>
    <!-- Header -->
    <!-- Modal mobile -->
    <div class="modal fade mobile" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- Thay anh thuong hieu -->
                    <img src="./assets/img/logovorke123.png" alt="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <!-- Tao tung modal line -->
                    <div class="modal-line">
                        <i class="fa-solid fa-mobile"></i><a href="/" class="">Điện Thoại</a>
                    </div>
                    <div class="modal-line">
                        <i class="fa-brands fa-product-hunt"></i><a href="/" class="">Sản phẩm IoT</a>
                    </div>
                    <div class="modal-line">
                        <i class="fa-solid fa-address-card"></i><a href="/" class="">Về Vorke</a>
                    </div>
                    <div class="modal-line">
                        <i class="fa-solid fa-address-card"></i> <a href="/" class="">Đơn hàng</a>
                    </div>
                    <div class="modal-line">
                        <i class="fa-solid fa-right-to-bracket"></i><a href="/" class="">Đăng ký/ Đăng nhập</a>
                    </div>
                </div>
                <div class="mobile-modal-footer">
                    <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a target="_blank" href="#"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal search -->

    <div class="modal fade search" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="input-group mb-3 search-input">
                        <span class="input-group-text" data-bs-dismiss="modal" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" placeholder="Tìm kiếm ..." aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>










    <!-- Load Products -->

    <?php
    include('./templeProducts/nav_menu.php');
    include('./templeProducts/main.php');
    ?>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-2 col-sm-2">
            </div> -->
            <div class="col-md-10 col-sm-10">
                <?php
                include('./templeProducts/main.php');
                ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid p-0">

        <footer class="bg-white text-center text-lg-start text-black">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row my-4">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 footer_logo">

                        <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                            <img src="./assets/img/logovorke123.png" height="70" alt="" loading="lazy" />
                        </div>

                        <p class="text-center footer_logo-title">Kết nối cuộc sống thông qua công nghệ với những sản
                            phẩm điện
                            thoại chất
                            lượng tại đây
                        </p>

                        <ul class="list-unstyled d-flex flex-row justify-content-center footer_logo-social">
                            <li>
                                <a class="px-2" href="#!">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a class="px-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="ps-2" href="#!">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 footer_phone">
                        <h5 class="text-uppercase mb-4">Điện thoại</h5>

                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none">Iphone 14 ProMax</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none">Huawei Nova 3i</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none">Iphone 12 Pro</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none">Iphone 11 Pro</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none">Iphone 13 ProMax</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none">Iphone 12 ProMax</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black">Xem tất cả</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 member">
                        <h5 class="text-uppercase mb-4">Thành viên</h5>

                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none"><i class="fa-solid fa-user"></i>Dịp
                                    Lâm Tuấn</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none"><i class="fa-solid fa-user"></i>Nguyễn Hồng Thái</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none"><i class="fa-solid fa-user"></i>Trần Tân Minh</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-black text-decoration-none"><i class="fa-solid fa-user"></i>Nguyễn Ngọc Trình</a>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 contact">
                        <h5 class="text-uppercase mb-4">Liên Lạc</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p><i class="fas fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 copy-right" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-black" href="#">Vorke.com</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Slick slider -->
    <!-- link main.js -->
    <script src="./assets/js/lamtuan.js"></script>
    <!-- Thai -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="./assets/js/thai.js"></script>

    <div class="footer"></div>

    <!-- timkiem -->

</body>

</html>