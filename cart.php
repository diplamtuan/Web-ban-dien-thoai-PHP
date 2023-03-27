<?php include_once "./DB/dbconnect.php"
?>
<?php
include 'header.php';
?>

<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>
                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body cart-title">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center col-md-2 col-lg-2 col-xl-2">
                                <h4>Hình ảnh</h4>
                            </div>
                            <div class="d-flex justify-content-start align-items-center col-sm-0 col-md-3 col-lg-2 col-xl-3">
                                <h4>Tên điện thoại</h4>
                            </div>
                            <div class="d-flex justify-content-center align-items-center col-sm-0 col-md-2 col-lg-2 col-xl-2">
                                <h4>Số lượng</h4>
                            </div>
                            <div class="d-flex justify-content-start align-items-center col-sm-0 col-md-2 col-lg-1 col-xl-1 offset-lg-1">
                                <h4>Giá</h4>
                            </div>
                            <div class="d-flex justify-content-start align-items-center col-sm-0 col-md-2 col-lg-2 col-xl-1 offset-lg-1">
                                <h4>Tổng giá</h4>
                            </div>
                            <div class="d-flex justify-content-end   align-items-center col-sm-0 col-md-1 col-lg-1 col-xl-1 text-end">
                                <h4>Xóa</h4>
                            </div>
                        </div>
                        <!-- Tieu de -->

                    </div>
                </div>
                <div class="card rounded-3 mb-4 cart-list">
                    <div class="card-body p-4">

                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="assets/img/huawei.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-3">
                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 d-flex">
                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-1 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end cart-delete">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-3 mb-4 cart-list">
                    <div class="card-body p-4">

                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="assets/img/huawei.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-3">
                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 d-flex">
                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-1 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end cart-delete">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="assets/img/huawei.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="/huawei.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="assets/img/huawei.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="assets/img/huawei.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">$499.00</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->




                <div class="card">
                    <div class="card-body d-flex justify-content-end align-items-center">
                        <div class="d-flex justify-content-center align-items-center">
                            <h3>Total :</h3>
                            <h3>1000$</h3>
                        </div>
                        <div>
                            <button type="button" class="btn btn-warning btn-block btn-lg fs-3 ms-5">Thanh toán</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>