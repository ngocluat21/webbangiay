<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/images/logo-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/loginandregister.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
</head>

<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Đăng ký
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">hoặc sử dụng email của bạn:</p>
                    </div>

                    <form class="login-form" action="index.php?act=dangky" method="post" onsubmit="return validateForm()">
                    
                        <input type="text" name="username" class="auth-form-input" id="username" placeholder="Họ tên" required>
        
                        <input type="email" name="email" class="auth-form-input" id="email" placeholder="Email" required>

                        <input type="text" name="tel" class="auth-form-input" placeholder="Phone number" required>
                
                        <input type="text" name="address" class="auth-form-input" placeholder="Địa chỉ" required>
                        <div class="input-icon">
    
                            <input type="password" name="pass" class="auth-form-input" placeholder="Mật khẩu" required>
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <input type="password" class="auth-form-input" placeholder="Xác nhận mật khẩu" required>
                        
                        </label>
                        <div class="footer-action">
                            <input type="submit" name="dangky" value="Đăng ký" class="auth-submit">
                            <a href="index.php?act=dangnhap" class="auth-btn-direct">Đăng nhập</a>
                        </div>
                        <h2 class="thongbao">

                        </h2>
                    </form>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="assets/images/vector.jpg" alt="login">

                </div>
            </div>
        </div>
    </div>
</body>

</html>