<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB BÁN GIÀY</title>
    <link rel="shortcut icon" href="assets/images/logo-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/loginandregister.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" 
    />
=======
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
>>>>>>> 8814f565cb2fee570b40dd3c5a0b5b610fb1119e
</head>

<body>
    <div class="contaier">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo.jpg" alt=""></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
                    <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                    <li><a href="index.php?act=gopy">Góp ý</a></li>
                </ul>
            </div>
            <div class="icon_bar flex_c">
                <div class="dropdown">
                    <div class="icon_login">
                        <?php
                        if (isset($_SESSION['username']) && $_SESSION['username']) {
                            // var_dump($_SESSION['nguoidung']);
                            echo 'Xin chào ' . $_SESSION['username']['username'];
                        } else {
                            echo "Chưa đăng nhập";
                        }
                        ?>
                        <i class="fa-regular fa-user fa-lg"></i>
                    </div>

                    <ul class="dropdown_list">
                        <li class="dropdown_item">
                            <a href="index.php?act=dangky" class="dropdown_link">
                                <span class="dropdown_text">Đăng ký</span>
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </li>
                        <li class="dropdown_item">
                            <a href="index.php?act=dangnhap" class="dropdown_link">
                                <span class="dropdown_text">Đăng nhập</span>
                                <i class="fa-solid fa-right-to-bracket"></i>
                            </a>
                        </li>
                        <li class="dropdown_item">
                            <a href="donhangcuatoi.html" class="dropdown_link">
                                <span class="dropdown_text">Đơn hàng của tôi</span>
                            </a>
                        </li>
                        <li class="dropdown_item">
                            <a href="index.php?act=laymk" class="dropdown_link">
                                <span class="dropdown_text">Quên mật khẩu</span>
                            </a>
                        </li>
                        <li class="dropdown_item">
                            <a href="index.php?act=edit_tk" class="dropdown_link">
                                <span class="dropdown_text">Cập nhật tài khoản</span>
                                <i class="fa-regular fa-address-card"></i>
                            </a>
                        </li>
                        <li class="dropdown_item">
                            <a href="index.php?act=dangxuat" class="dropdown_link">
                                <span class="dropdown_text">Đăng xuất</span>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="icon_cart">
                    <?php 
                        $cartCount = 0;
                        // var_dump($cart);
                        if(isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
                            foreach($_SESSION['mycart'] as $cart) {
                                // var_dump($cart[7]);
                                // var_dump($cartCount);
                                $cartCount += (int)$cart[7];
                            }
                        } else {
                            $cartCount = 0;
                        }
                    ?>
                    <span class="quatity_cart"><?=$cartCount?></span>
                    <a href="index.php?act=addgiohang"><i class="fa-solid fa-bag-shopping fa-lg"></i></a>
                </div>
            </div>
        </div>