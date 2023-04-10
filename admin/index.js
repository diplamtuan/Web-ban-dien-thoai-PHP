$(document).ready(function () {
    // Render Main
    function loadMain() {
        $.ajax({
            url: 'main.php',
            method: 'POST',
            data: {
                loadMain: 1,
            },
            success: function (data) {
                $("main").html(data);
            }
        })
    }
    loadMain();

    // Click main
    $(".dashboard").click(function () {
        loadMain();
    })
    $(".productAdmin").on("click", function () {
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
            success: function (data) {
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
            success: function (data) {
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
            success: function (data) {
                $(".pagination-product").html(data);
            }
        })
    }

    $(document).on('click', ".product-page-no", function () {
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
    $(document).on('click', '.side-menu >li >a', function () {
        removeActive();
        $(this).addClass('active');
    })


    // Khi an logout
    $('.logout').click(function () {
        $.ajax({
            url: '../function/authcode.php',
            method: 'POST',
            data: {
                logout: 1,
            },
            success: function (data) {
                alert(data);
                location.href = '../index.php';
            }
        })
    })
    // Chọn file ảnh
    $(document).on('change', '.product-add-form .file-input', function () {
        const file = $(this)[0].files[0];
        console.log(file);
        if (file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.addEventListener('load', function () {
                console.log(reader.result);
                $('.product-add-form #image-preview')[0].src = reader.result;

            })
            reader.readAsDataURL(file);

        } else {
            alert("Bạn phải chọn file ảnh");
        }
    })

    $(document).on('change', '.product-edit-form .file-input', function () {
        const file = $(this)[0].files[0];
        console.log(file);
        if (file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.addEventListener('load', function () {
                console.log(reader.result);
                $('.product-edit-form #image-preview')[0].src = reader.result;

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
            success: function (data) {
                $(".product-add-form .modal-content").html(data);
            }
        })
    }

    $(document).on('click', '.btn-add-product', function () {
        loadFormAddProduct()
    })


    // Load form edit product
    function loadFormEditProduct(id_product) {
        $.ajax({
            url: '../function/loadProductAdmin.php',
            method: 'POST',
            data: {
                loadFormEditProduct: 1,
                id_product: id_product,
            },
            success: function (data) {
                $(".product-edit-form .modal-content").html(data);
            }
        })
    }
    // Submit product add form
    $(document).on('click', '.product-add-form .submit', function () {
        var tendt = $(".product-add-form .input-name").val();
        var mota = $(".product-add-form .input-desc").val();
        var img = $(".product-add-form .file-input").val();
        if (checkValue(tendt)) {
            if (checkValue(img)) {
                if (checkValue(mota)) {
                    var image_name = $(".product-add-form .file-input")[0].files[0].name;
                    var gia = $(".product-add-form .input-price").val();
                    var quantity = $(".product-add-form .input-quantity").val();
                    var khuyenmai = $(".product-add-form .input-khuyenmai").val();
                    var baohanh = $(".product-add-form .input-baohanh").val();
                    var brand = $('.product-add-form .input-brand').val();
                    var suppli = $('.product-add-form .input-suppli').val();
                    var result = confirm("Bạn có chắc muốn sửa ?");
                    if (result) {
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
                            success: function (data) {
                                alert(data);
                                loadProduct(1);
                                loadPaginationProduct(1);
                                $(".product-add-form .close").click();
                            }
                        })
                    }
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
    // Click vào nút delete
    $(document).on('click', '.control-wrap .delete', function () {
        var pid = $(this).attr('pid');
        var result = confirm("Bạn xác nhận hủy sản phẩm ?");
        if (result) {
            $.ajax({
                url: '../function/loadProductAdmin.php',
                method: 'POST',
                data: {
                    deleteProduct: 1,
                    pid: pid,
                },
                success: function (data) {
                    loadProduct(1);
                }
            })
        }
    })
    // Click vào nút edit
    $(document).on('click', '.control-wrap .edit', function () {
        var pid = $(this).attr('pid');
        loadFormEditProduct(pid);
    })

    // Click vao nut submit edit
    $(document).on('click', '.product-edit-form .submit', function () {
        var id_product = $(this).attr('pid');
        var tendt = $(".product-edit-form .input-name").val();
        var mota = $(".product-edit-form .input-desc").val();
        var img = $(".product-edit-form .file-input").val();
        var inputCheckActive = $(".product-edit-form .form-check-input:checked");
        if (inputCheckActive) {
            var trangthai = 'Active';
        } else {
            var trangthai = 'Not Active';
        }
        if (checkValue(tendt)) {
            if (checkValue(img)) {
                if (checkValue(mota)) {
                    var image_name = $(".product-edit-form .file-input")[0].files[0].name;
                    var gia = $(".product-edit-form .input-price").val();
                    var quantity = $(".product-edit-form .input-quantity").val();
                    var khuyenmai = $(".product-edit-form .input-khuyenmai").val();
                    var baohanh = $(".product-edit-form .input-baohanh").val();
                    var brand = $('.product-edit-form .input-brand').val();
                    var suppli = $('.product-edit-form .input-suppli').val();
                    var result = confirm("Bạn có chắc muốn sửa ?");
                    if (result) {
                        $.ajax({
                            url: '../function/loadProductAdmin.php',
                            method: 'POST',
                            data: {
                                editProduct: 1,
                                tendt: tendt,
                                mota: mota,
                                image_name: image_name,
                                gia: gia,
                                quantity: quantity,
                                khuyenmai: khuyenmai,
                                baohanh: baohanh,
                                brand: brand,
                                suppli: suppli,
                                trangthai: trangthai,
                                id_product: id_product,
                            },
                            success: function (data) {
                                alert(data);
                                loadProduct(1);
                                loadPaginationProduct(1);
                                $(".product-edit-form .close").click();
                            }
                        })
                    }
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