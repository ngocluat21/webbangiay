<?php 
    function tongtien() {
        $total = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart[3] * $cart[7];
            $total += $ttien;
        }   
        return $total;
    }
    
    function insert_bill($iduser, $username, $email, $address, $tel, $bill_pttt, $ngaydathang, $tongtien) {
        $sql = "INSERT INTO bill(iduser, bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) VALUES ('$iduser', '$username', '$email', '$address', '$tel', '$bill_pttt', '$ngaydathang', '$tongtien' )";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($iduser, $idspbt, $img, $namepro, $price, $mau, $size, $soluong, $tongtien, $idbill) {
        $sql = "INSERT INTO cart(iduser, idspbt, img, namepro, price, mau, size, soluong, thanhtien, idbill) VALUES ('$iduser', '$idspbt', '$img', '$namepro', '$price', '$mau', '$size', '$soluong', '$tongtien', '$idbill')";
        return pdo_execute($sql);
    }