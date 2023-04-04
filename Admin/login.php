<?php
session_start();
if (isset($_SESSION['auth'])) {
    header('Location:index.php');
};
?>

<head>
    <title>Login</title>
    <link rel="icon" href="../assets/img/logoicon.png">
    <link rel="stylesheet" href="../assets/css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/trinh.css">
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');
    </style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</head>
<div class="container">
    <div id="main">

        <form action="../function/authcode.php" id="form-2" class="form" method="POST">
            <div class="d-flex justify-content-center align-items-center form-title">
                <h1 class="">Admin</h1>
                <!-- <h3 class="ms-auto">Đăng Ký</h3> -->
            </div>
            <div class="form__wrap">
                <label for="" class="form__wrap-label">Tên đăng nhập</label>
                <input type="text" class="form__wrap-input" name="username" placeholder="VD: Dịp Lâm Tuấn">
                <span class="form__error-message"></span>
            </div>
            <div class="form__wrap">
                <label for="" class="form__wrap-label">Mật khẩu</label>
                <input type="password" class="form__wrap-input" name="password" placeholder="Nhập mật khẩu">
                <span class="form__error-message"></span>
            </div>

            <button class="form__button">Đăng Nhập</button>
        </form>

    </div>

    <script src="../assets/js/lamtuan/validation.js"></script>
    <script>
        Validation({
            form: '#form-2',
            errorMessage: '.form__error-message',
            rules: [
                Validation.isRequired('input[name="username"]', 'Vui lòng nhập trường này'),
                Validation.isRequired('input[name="password"]', 'Vui lòng nhập trường này'),
                Validation.minLength('input[name="password"]', 7),
                Validation.maxLength('input[name="password"]', 11),
            ],
            onSubmit(data) {
                console.log(data);
                $(document).ready(function() {
                    $.ajax({
                        url: '../function/authcode.php',
                        method: 'post',
                        data: {
                            'loginAdmin': data
                        },
                        success: function(data, success) {
                            if (data == 'Sai tài khoản hoặc mật khẩu') {
                                alert(data);
                            } else {
                                alert(data);
                                location.href = 'index.php';
                            }
                        }
                    })
                });
            }
        })
    </script>

</div>