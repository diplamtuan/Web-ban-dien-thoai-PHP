<?php
include 'header.php';
include 'model/db.class.php';
include 'model/brand.class.php';
include 'view/brandView.php';


?>
<!-- Content -->

<div class="container">
    <div class="content">
        <div class="content_input-search">
            <span class="content_input-search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" placeholder="Tìm kiếm..." id="search_product">
        </div>
    </div>
    <hr>
    <!-- Search content -->

    <!-- Menu bar -->
    <div class="menu_arrange--wrap">
        <div class="menu_arrange">
            <span class="menu_arrange-icon"><i class="fa-solid fa-arrow-up-wide-short"></i></span>
            <span class="menu_arrange-text">Sắp xếp theo</span>
            <ul class="menu_list">
                <li class="menu_item">Giá tăng dần</li>
                <li class="menu_item">Giá giảm dần</li>
            </ul>
        </div>
    </div>

    <!-- Product wrap -->
    <div class="row">
        <div class="col filter">
            <!-- Filter header -->
            <div class="filter-header">
                <div class="filter-header-item">
                    <i class="fa-solid fa-bars filter-icon"></i>
                    <span>Lọc theo</span>
                </div>

                <div class="filter-header-item" id="restart">
                    <span>Đặt lại</span>
                    <i class="fa-solid fa-rotate-right reset-icon"></i>
                </div>
            </div>
            <!--  Filter body-->

            <div class="filter-body">
                <h2 class="filter-body-title">Phân loại</h2>

                <ul class="filter-body-list">
                    <!-- <li class="filter-body-item active ">
                        <span>Điện thoại</span>
                        <i class="fa-solid fa-circle-dot"></i>
                    </li>
                    <li class="filter-body-item">
                        <span> Điện thoại</span>
                        <i class="fa-solid fa-circle-dot"></i>
                    </li>
                    <li class="filter-body-item">
                        <span>Điện thoại</span>
                        <i class="fa-solid fa-circle-dot"></i>
                    </li> -->

                </ul>
            </div>
            <!-- Filter price -->

            <div class="filter-price">
                <h2 class="filter-price-title">Giá sản phẩm</h2>
                <div class="filter-price-input">
                    <input type="text" placeholder="Giá thấp nhất">
                    <span></span>
                    <input type="text" placeholder="Giá cao nhất">
                </div>
                <div class="filter-price-select-list">
                    <div class="filter-price-select-item">
                        <span>1-4 triệu</span>
                    </div>
                    <div class="filter-price-select-item">
                        <span>4-7 triệu</span>
                    </div>
                    <div class="filter-price-select-item">
                        <span>7-13 triệu</span>
                    </div>
                    <div class="filter-price-select-item">
                        <span>13-20 triệu</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="col product-list">

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
                        <img src="./assets/img/logovorke1231.png" height="70" alt="" loading="lazy" />
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
<script>
    $(document).ready(function() {



        function loadPage(page, id_brand, input_search) {
            $.ajax({
                url: 'function/ajax.pagination.php',
                method: 'GET',
                data: {
                    page_no: page,
                    brand_no: id_brand,
                    input_search: input_search,
                },
                success: function(data) {
                    $(".col.product-list").html(data);
                }
            })
        }

        function loadActiveBrand(id_brand) {
            $.ajax({
                url: 'function/loadBrand.php',
                method: 'GET',
                data: {
                    brand_no: id_brand,
                },
                success: function(data) {
                    $(".filter-body-list").html(data);
                }
            })
        }
        loadPage();
        loadActiveBrand();
        <?php
        if (isset($_GET['id'])) {
        ?>
            const queryString = window.location.search;
            const params = new URLSearchParams(queryString);
            var id = params.get('id');
            loadPage(1, id);
            loadActiveBrand(id);
        <?php
        }
        ?>
        // Bat su kien click vao so trang tren website
        $(document).on("click", ".pagination .pagination_btn>div", function(event) {
            var page_id = $(this).attr("id");
            var brand_active = $(".filter-body-list .filter-body-item.active").attr("id");
            loadPage(page_id, brand_active);
        })

        //Bat su kien click vao nut quay ve
        $(document).on("click", ".pagination_controll.back", function() {
            var page_id = $(".pagination .pagination_btn>.active").attr("id");
            var page_id_back = page_id - 1;
            var brand_active = $(".filter-body-list .filter-body-item.active").attr("id");
            if (page_id_back <= 0) {
                page_id_back = 1;
            }
            loadPage(page_id_back, brand_active);
        })

        // Bat su kien click vao nut tiep theo
        $(document).on("click", ".pagination_controll.next", function() {
            var page_id = $(".pagination .pagination_btn>.active").attr("id");
            var page_number = $(".pagination .pagination_btn>div").length;
            var brand_active = $(".filter-body-list .filter-body-item.active").attr("id");
            if (page_id < page_number) {
                page_id++;
            } else {
                page_id = page_number;
            }

            loadPage(page_id, brand_active);
        })

        // Bat sự kiện click vào nút thương hiệu
        $(document).on('click', ".filter-body-list .filter-body-item", function() {
            var id_brand = $(this).attr("id");
            loadPage(1, id_brand);
            loadActiveBrand(id_brand);
        });

        // Bat su kien vao nut restart brand
        $(document).on('click', ".filter-header .filter-header-item#restart", function() {
            $("#search_product").val('');
            loadPage(1, 0);
            loadActiveBrand(0);
        });

        // Bat su kien khi ấn vào nút
        $("#search_product").keyup(function() {
            var input = $(this).val();
            var page_id = $(".pagination .pagination_btn>.active").attr("id");
            var brand_active = $(".filter-body-list .filter-body-item.active").attr("id");
            loadPage(page_id, brand_active, input);
        });
        // Bat su kien khi an nut dang ky
        $("#form-1 > .form-title > h3 ").click(function() {
            location.href = "login.php";
        });
        $("#form-2 > .form-title > h3 ").click(function() {
            location.href = "register.php";
        });

        $("#logout").click(() => {
            $.ajax({
                url: 'function/authcode.php',
                method: 'post',
                data: {
                    'logout': 1
                },
                success: function(data) {
                    alert(data);
                    location.href = 'index.php';
                }
            })
        });

        $("#login-register").click(() => {
            location.href = 'login.php';
            // $.ajax({
            //     url: 'function/authcode.php',
            //     method: 'post',
            //     data: {
            //         'logout': 1
            //     },
            //     success: function(data) {
            //         location.href = 'login.php';
            //     }
            // })
        })
    });
</script>
<div class="footer"></div>
</body>

</html>