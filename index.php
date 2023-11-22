<?php
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/color_size.php";
    include "model/danhmuc.php";

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
            case "addgiohang":
                include "view/giohang/giohang.php";
                break;
            case "dangky":
                include "view/taikhoan/dangky.php";
                break;
            case "dangnhap":
                include "view/taikhoan/dangnhap.php";
                break;
            case "quenmk":
                include "view/taikhoan/quenmk.php";
                break;
            case "edit_tk":
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
?>