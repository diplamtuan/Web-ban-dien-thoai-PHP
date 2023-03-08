<?php include_once "./DB/dbconnect.php"
?>
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
    <link rel="stylesheet" href="./assets/css/main.css">
    </link>

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
        <i class="fa-solid fa-magnifying-glass d-xl-none"></i>

        <!-- Mobile bars icon -->
        <div class="mobile-toggler d-xl-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

    </div>
    <!-- Header -->
    <!-- Modal -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- Thay anh thuong hieu -->
                    <img src="./assets/img/logovorke123.png" alt="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <!-- Slider -->

    <div class="slider container-fluid">
        <div class="position-relative">
            <img src="//image.oppo.com/content/dam/oppo/common/mkt/v2-2/a77s-en/topbanner/a77s-blue-2880_1440-v2.jpg.thumb.webp" alt="">
            <div class="slider_content">
                <h3 class="slider_title position-absolute">OPPO A77s</h3>
                <p class="slider_desc position-absolute">Cool miễn bàn, Cân ngàn tác vụ</p>
                <button type="button" class="btn slider_btn position-absolute">Tìm hiểu thêm</button>
            </div>
        </div>
        <div class="position-relative">
            <img src="//image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno8-t-5g-en/topbanner/reno8-t-5g_2880_1440_2.jpg" alt="">
            <div class="slider_content">
                <h3 class="slider_title position-absolute">OPPO Pad Air</h3>
                <p class="slider_desc position-absolute">Mỗi Điểm Ảnh, Một Điểm Yêu</p>
                <button type="button" class="btn slider_btn position-absolute">Tìm hiểu thêm</button>
            </div>
        </div>
        <div class="position-relative">
            <img src="//image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno8-t-en/topbanner/reno8-t_2880_1440_2.jpg.thumb.webp" alt="">
            <div class="slider_content">
                <h3 class="slider_title position-absolute">OPPO Reno8 T </h3>
                <p class="slider_desc position-absolute">Mỗi Điểm Ảnh, Một Điểm Yêu</p>
                <button type="button" class="btn slider_btn position-absolute">Tìm hiểu thêm</button>
            </div>
        </div>
    </div>

    <!-- Brands -->
    <?php
    include './homepage.php';
    ?>
    <!-- <div class="brands container" id="brands">
        <h2 class="brands_title text-center">Về Thương Hiệu</h2>
        <div class="row brand_list position-relative">
            <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                <h4 class="brand_item-name">Iphone</h4>
                <img class="brand_item-img" src="./assets/img/iphone.jpg" alt="">
            </div>
            <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                <h4 class="brand_item-name">Apple</h4>
                <img class="brand_item-img" src="./assets/img/huawei.jpg" alt="">
            </div>
            <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                <h4 class="brand_item-name">Apple</h4>
                <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
            </div>
        </div>
    </div> -->
    <!-- Hot -->
    <div class="container-fluid bg-black hots_wrap">
        <div class="brands container" id="hots">
            <h2 class="brands_title text-center">Về Bán Chạy</h2>
            <div class="row position-relative" id="hots_list">
                <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                    <h4 class="brand_item-name">Apple</h4>
                    <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
                </div>
                <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                    <h4 class="brand_item-name">Apple</h4>
                    <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
                </div>
                <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                    <h4 class="brand_item-name">Apple</h4>
                    <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
                </div>
                <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                    <h4 class="brand_item-name">Apple</h4>
                    <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
                </div>
                <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                    <h4 class="brand_item-name">Apple</h4>
                    <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
                </div>
                <div class="col-xxl-6 col-md-6 col-sm-12 brand_item">
                    <h4 class="brand_item-name">Apple</h4>
                    <img class="brand_item-img" src="https://cdn.dribbble.com/userupload/4722244/file/original-9ccb9f986b907cc7ea6c010d2c2c120f.png?compress=1&resize=1024x768" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Update -->
    <div class="container-fluid update position-relative">
        <img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm105-ning-23-glitter.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=7b378d24bf745a3945ba3cc89b49a020" alt="">
        <h2 class="update_title text-center position-absolute top-0 start-50 translate-middle">Cập nhật mới nhất từ
            Vorke</h2>
        <p class="update_desc text-center position-absolute start-50 translate-middle">Đăng ký để nhận ngay những
            thông tin ưu đãi, sản phẩm mới hay sự kiện đặc
            biệt từ Vorke
        </p>
        <form action="#" class="form_update-email position-absolute start-50 translate-middle">
            <div class="input-wrap">
                <input type="text" placeholder="E-mail của bạn">
                <button type="submit"><i class="fa-regular fa-paper-plane align-middle"></i></button>
            </div>
            <span class="input_error-mess"></span>
            <p class="form_update-email-policy">
                <input type="checkbox" name="update_email" class="circle-checkbox">
                Tôi muốn đăng ký để nhận thông tin từ Vorke và đối tác. Khi
                đăng ký, bạn đồng ý với
                <span class="form_update-email-policy-link">Chính sách quyền riêng tư của Vorke</span>
            </p>
        </form>
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
    <script src="./assets/js/main.js"></script>

    <div class="footer"></div>
</body>

</html>