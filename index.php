<?php
session_start();
ob_start();
include "view/header.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/color_size.php";
include "model/danhmuc.php";
include "model/taikhoan.php";



$loadsp = loadall_sanpham_home();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "gopy":
            include "view/gopy.php";
            break;
        case "hoidap":
            include "view/hoidap.php";
            break;

        case "sanphamct":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
                $spbt = loadone_spbt($_GET['id']);
                extract($sanpham);
                $sanphamcl = load_sp_cungloai($_GET['id'], $iddm);
                $slbt = load_soluongbt($_GET['id']);
            } else {
                include "view/trangchu.php";
            }
            $list_m = loadall_mau();
            $list_s = loadall_size();
            include "view/sanphamct.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $email    = $_POST['email'];
                $address    = $_POST['address'];
                $tel    = $_POST['tel'];
                insert_taikhoan($username, $pass, $email, $address,  $tel);
                $thongbao = "da dang ky thanh cong";
            }
            include "view/taikhoan/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $pass = $_POST['pass'];
                $username   = $_POST['username'];
                $checkusername = checkusername($username, $pass);
                if (is_array($checkusername)) {
                    $_SESSION['username'] = $checkusername;
                    //$thongbao = "da dang nhap thanh cong";
                    header('Location: index.php');
                } else {
                    $thongbao = "tai khoan khong ton tai";
                }
            }

            include "view/taikhoan/dangnhap.php";
            break;
        case "laymk":
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "mat khau cua ban la" . $checkemail['pass'];
                } else {
                    $thongbao = "email nay khong ton tai";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case "edit_tk":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $pass = $_POST['pass'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id  = $_POST['id'];

                update_taikhoan($id, $username, $pass, $email, $address, $tel);
                $_SESSION['username'] = checkusername($username, $pass);
                header('Location: index.php?act=edit_tk');
            }
            include "view/taikhoan/edit_tk.php";
            break;
        default:
            include "view/trangchu.php";
            break;
    }
} else {
    include "view/trangchu.php";
}

include "view/footer.php";
