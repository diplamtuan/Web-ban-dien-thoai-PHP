<?php
include 'header.php';

?>
<section class="vh-100" style="background-color: #8c9eff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-stepper text-black" style="border-radius: 16px;">

                    <div class="card-body p-5 card-body-border">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal123">
                            Launch demo modal
                        </button>

                        <ul id="progressbar-2" class="d-flex justify-content-between mx-0 mt-0 mb-5 px-0 pt-0 pb-2 progressbar">
                            <li class="step0 text-center" id="step1"></li>
                            <li class="step0 text-center" id="step2"></li>
                            <li class="step0 text-center" id="step3"></li>
                            <li class="step0 text-muted text-end" id="step4"></li>
                        </ul>

                        <div class="d-flex justify-content-between">
                            <div class="d-lg-flex align-items-center">
                                <i class="fas fa-clipboard-list fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                <div>
                                    <p class="fw-bold mb-1">Order</p>
                                    <p class="fw-bold mb-0">Processed</p>
                                </div>
                            </div>
                            <div class="d-lg-flex align-items-center">
                                <i class="fas fa-box-open fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                <div>
                                    <p class="fw-bold mb-1">Order</p>
                                    <p class="fw-bold mb-0">Shipped</p>
                                </div>
                            </div>
                            <div class="d-lg-flex align-items-center">
                                <i class="fas fa-shipping-fast fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                <div>
                                    <p class="fw-bold mb-1">Order</p>
                                    <p class="fw-bold mb-0">En Route</p>
                                </div>
                            </div>
                            <div class="d-lg-flex align-items-center">
                                <i class="fas fa-home fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                <div>
                                    <p class="fw-bold mb-1">Order</p>
                                    <p class="fw-bold mb-0">Arrived</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>


    </div>
</section>

<!-- Modal -->

<div class="modal" id="exampleModal123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered order_detail-wrapper">
        <div class="modal-content order_detail-content">
            <!-- <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body ">
                <!-- <div class="row d-flex justify-content-center align-items-center h-100 w-100">
                    <div class="col-lg-10 col-xl-8">
                        
                    </div>
                </div> -->
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h5 class="text-muted mb-0 fs-2">Thanks for your Order, <span style="color: #a8729a;">Anna</span>!</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0 fs-2" style="color: #a8729a;">Receipt</p>
                            <!-- <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p> -->
                        </div>
                        <div class="card shadow-0 border mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="./assets/img/huawei.jpg" class="img-fluid" alt="Phone">
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 fs-2">Samsung Galaxy</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 fs-3 small">White</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 fs-3 small">Capacity: 64GB</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 fs-3 small">Qty: 1</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 fs-3 small">$499</p>
                                    </div>
                                </div>
                                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                            </div>
                        </div>


                        <div class="d-flex justify-content-between pt-2">
                            <p class="fw-bold mb-0 fs-2">Chi tiết đơn hàng</p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4 fs-2 fw-bold">Total</span> <span class="fs-3 fw-bold">$898.00</span></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0 fs-3 text-black">Ngày tạo đơn hàng : 22 Dec,2019</p>
                        </div>
                    </div>
                    <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                            paid: <span class="h2 mb-0 ms-2">$1040</span></h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

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
<script src="./assets/js1/lamtuan1/lamtuan1.js"></script>
<div class="footer"></div>
<!-- Button trigger modal -->
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
                <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">Anna</span>!</h5>
            </div>
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                    <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                </div>
                <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp" class="img-fluid" alt="Phone">
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0">Samsung Galaxy</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">White</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">Capacity: 64GB</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">Qty: 1</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">$499</p>
                            </div>
                        </div>
                        <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-2">
                                <p class="text-muted mb-0 small">Track Order</p>
                            </div>
                            <div class="col-md-10">
                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                    <div class="progress-bar" role="progressbar" style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-around mb-1">
                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp" class="img-fluid" alt="Phone">
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0">iPad</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">Pink rose</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">Capacity: 32GB</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">Qty: 1</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">$399</p>
                            </div>
                        </div>
                        <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-2">
                                <p class="text-muted mb-0 small">Track Order</p>
                            </div>
                            <div class="col-md-10">
                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                    <div class="progress-bar" role="progressbar" style="width: 20%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-around mb-1">
                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between pt-2">
                    <p class="fw-bold mb-0">Order Details</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $898.00</p>
                </div>

                <div class="d-flex justify-content-between pt-2">
                    <p class="text-muted mb-0">Invoice Number : 788152</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="text-muted mb-0">Invoice Date : 22 Dec,2019</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
                </div>

                <div class="d-flex justify-content-between mb-5">
                    <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                </div>
            </div>
            <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                    paid: <span class="h2 mb-0 ms-2">$1040</span></h5>
            </div>
        </div>
    </div>
</div>
</body>

</html>