<?php
    function insert_sanpham($namepro, $price, $discount, $img, $mota, $iddm) {
        $sql = "INSERT INTO sanpham(namepro, price, discount, img, mota, iddm, status) VALUES('$namepro', '$price', '$discount', '$img', '$mota', '$iddm', 1)";
        pdo_execute($sql); 
    }
    function loadone_sanpham($id) {
        $sql = "SELECT * FROM sanpham WHERE id=".$id;
        $pro = pdo_query_one($sql);
        return $pro;
    }

    function loadall_sanpham() {
        $sql = "SELECT * FROM sanpham";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham_home() {
        $sql = "SELECT sanpham.id, sanpham.namepro, sanpham.price, sanpham.discount, sanpham.img, sanpham.mota FROM sanpham JOIN danhmuc ON sanpham.iddm = danhmuc.id WHERE danhmuc.status = 1 ORDER BY sanpham.id DESC LIMIT 0,3";
        $loadall = pdo_query($sql);
        return $loadall;
    }

    
    
    function load_sp_cungloai($id, $iddm) {
        $sql = "SELECT * FROM sanpham WHERE iddm = ".$iddm." AND id <>".$id;
        $spcl = pdo_query($sql);
        return $spcl;
    }

    function update_status_sp0($id) {
        $sql = "UPDATE sanpham SET status=0 WHERE id=".$id;
        pdo_execute($sql);
    }
    function update_status_sp1($id) {
        $sql = "UPDATE sanpham SET status=1 WHERE id=".$id;
        pdo_execute($sql);
    }

    // Sản phẩm biến thể
    function insert_variant($idpro, $idmau, $idsize, $soluong) {
        $sql = "INSERT INTO spbt(idpro, idmau, idsize, soluong, status) VALUES($idpro, '$idmau', $idsize, $soluong, 1";
        pdo_execute($sql);
    }
    function update_sanpham($id, $iddm, $namepro, $price, $discount, $hinh, $mota) {
        if($hinh != "") {
            $sql = "UPDATE sanpham SET iddm = '".$iddm."', namepro = '".$namepro."', price = '".$price."', discount = '".$discount."', img = '".$hinh."', mota = '".$mota."' WHERE id =".$id;
        } else {
            $sql = "UPDATE sanpham SET iddm = '".$iddm."', namepro = '".$namepro."', price = '".$price."', discount = '".$discount."', mota = '".$mota."' WHERE id=".$id;
        }
        pdo_execute($sql);
    }

    function insert_spbt($idpro, $idmau, $idsize, $soluong) {
        $sql = "INSERT INTO spbt (idpro, idmau, idsize, soluong, status) VALUES ($idpro, $idmau, $idsize, $soluong, 1)";
        pdo_execute($sql);
    }
    function loadone_spbt($idpro) {
        $sql = "SELECT spbt.id as mabt, mausp.id as mamau, mausp.mau as mau, size.id as masize, size.size as size
                FROM spbt 
                JOIN mausp ON spbt.idmau = mausp.id 
                JOIN size ON spbt.idsize = size.id 
                WHERE spbt.idpro = $idpro AND spbt.status = 1 
                -- GROUP BY spbt.id, mausp.id, size.id
                ";
        $list_spbt = pdo_query($sql);
        return $list_spbt;
    }
    // function load_soluongbt($id) {
    //     $sql = "SELECT spbt.id, SUM(spbt.soluong) as soluong FROM spbt join sanpham WHERE spbt.idpro=$id";
    //     $slbt = pdo_query($sql);
    //     return $slbt;
    // }
    function load_soluongbt($id) {
        $sql = "SELECT SUM(spbt.soluong) as soluong FROM spbt WHERE spbt.idpro = $id";
        $slbt = pdo_query($sql);
        return $slbt;
    }
    


    

    function insertOrUpdate_spbt($idpro, $idmau, $idsize, $soluong) {
        // Kiểm tra xem biến thể đã tồn tại chưa
        $existing_spbt = get_spbt_by_idpro_and_ids($idpro, $idmau, $idsize);
    
        if ($existing_spbt) {
            // Biến thể đã tồn tại, cập nhật số lượng
            $new_soluong = $existing_spbt['soluong'] + $soluong;
            update_spbt_soluong($existing_spbt['id'], $new_soluong);
        } else {
            // Biến thể chưa tồn tại, thêm mới
            insert_spbt($idpro, $idmau, $idsize, $soluong);
        }
    }
    
    function get_spbt_by_idpro_and_ids($idpro, $idmau, $idsize) {
        $sql = "SELECT * FROM spbt WHERE idpro = $idpro AND idmau = $idmau AND idsize = $idsize";
        return pdo_query_one($sql);
    }
    
    function update_spbt_soluong($idspbt, $soluong) {
        $sql = "UPDATE spbt SET soluong = $soluong WHERE id = $idspbt";
        pdo_execute($sql);
    }
    