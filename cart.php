<?php
include('header.php');
require('DB/dbconnect.php');
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['cart']);
// if (!isset($_SESSION['delcart']) == 1){
// 	header("Location: nullcart.php" );
// 	exit();
// };
?>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<!-- End -->

<div class="pb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

				<!-- Shopping cart table -->
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" class="border-0 bg-light">
									<div class="p-2 px-3 text-uppercase">Sản phẩm</div>
								</th>
								<th scope="col" class="border-0 bg-light">
									<div class="py-2 text-uppercase">Giá</div>
								</th>
								<th scope="col" class="border-0 bg-light">
									<div class="py-2 text-uppercase">Số lượng</div>
								</th>
								<th scope="col" class="border-0 bg-light">
									<div class="py-2 text-uppercase">Tạm tính</div>
								</th>
								<th scope="col" class="border-0 bg-light">
									<div class="py-2 text-uppercase"></div>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$Quantity = 0;
							$Total = 0;
							$Subtotal = 0;
							if (isset($_SESSION['cart'])) {
								$cart = $_SESSION['cart'];
								foreach ($cart as $value) {
							?>
									<tr>
										<th scope="row" class="border-0">
											<div class="p-2">
												<img src="assets/img/<?php echo $value['Image']; ?>" alt="<?php echo $value['Name']; ?>" width="70" class="img-fluid rounded shadow-sm">
												<div class="ml-3 d-inline-block align-middle">
													<h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $value['Name']; ?></a></h5>
													<span class="text-muted font-weight-normal font-italic d-block">Thương hiệu: <?php echo $value['Brand']; ?></span>
												</div>
											</div>
										</th>
								<td class="border-0 align-middle"><strong><?php echo $value['Price'] ?>vnđ</strong></td>
								<td class="border-0 align-middle"><strong><?php echo $value["Quantity"];?></strong></td>
								<td class="border-0 align-middle"><strong><?php
										$Total = $value["Quantity"] * intval(str_replace('.', '', $value['Price']));
										$Subtotal += $Total;
										echo  strval(number_format($Total, 0, '.', '.')); ?></strong></td>
								<td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
									</tr>
									<?php }
										}; ?>
						</tbody>
					</table>
				</div>
				<!-- End -->
			</div>
		</div>

		<div class="row py-5 p-4 bg-white rounded shadow-sm">
			<div class="col-lg-6">
				<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Khuyến mãi</div>
				<div class="p-4">
					<p class="font-italic mb-4">Nếu bạn có mã khuyễn mãi xin nhập vào</p>
					<div class="input-group mb-4 border rounded-pill p-2">
						<input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
						<div class="input-group-append border-0">
							<button id="button-addon3" type="button" class="btn btn-secondary px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Xác nhận</button>
						</div>
					</div>
				</div>
				<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thông tin thêm</div>
				<div class="p-4">
					<p class="font-italic mb-4">Ghi chú</p>
					<textarea name="" cols="30" rows="2" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
				<div class="p-4">
					<!-- <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p> -->
					<ul class="list-unstyled mb-4">
						<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Đơn hàng</strong><strong><?php echo strval(number_format($Subtotal, 0, '.', '.'));?> vnđ</strong></li>
						<!-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> -->
						<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Thuế</strong><strong>00.00 vnđ</strong></li>
						<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng tiền</strong>
							<h5 class="font-weight-bold"><?php echo strval(number_format($Subtotal, 0, '.', '.'));?> vnđ</h5>
						</li>
					</ul><a href="#" class="btn btn-primary rounded-pill py-2 btn-block">Thanh toán</a>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
	
<a href="getdata.php" class="btn btn-primary rounded-pill py-2 btn-block">Tiếp tục mua hàng</a>
<a href="cart.php?delcart=1" class="btn btn-primary rounded-pill py-2 btn-block">Xóa giỏ hàng</a>
<?php
include('footer.php');
?>