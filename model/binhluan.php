<?php
function insert_binhluan($noidung,$iduser,$idspbt,$ngaybinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idspbt','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idspbt){
    $sql = "SELECT binhluan.*, taikhoan.username
            FROM binhluan
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            WHERE 1";
    
    if ($idspbt > 0) {
        $sql .= " AND idspbt = '" . $idspbt . "'";
    }

    $sql .= " ORDER BY binhluan.id DESC";

    $listbinhluan = pdo_query($sql);

    return $listbinhluan;
}

function update_status_bl0($id) {
    $sql = "UPDATE binhluan SET status_bl=0 WHERE id=".$id;
    pdo_execute($sql);
}
function update_status_bl1($id) {
    $sql = "UPDATE binhluan SET status_bl=1 WHERE id=".$id;
    pdo_execute($sql);
}
?>