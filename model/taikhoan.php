<?php
function insert_taikhoan($username, $pass, $email, $address,  $tel)
{
    $sql = "insert into taikhoan(username,pass,email,address,tel) values('$username','$pass','$email','$address','$tel')";
    pdo_execute($sql);
}
function checkusername($username, $pass)
{
    $sql = "select * from taikhoan WHERE username='" . $username . "' AND pass='" . $pass . "'";
    $pro = pdo_query_one($sql);
    return $pro;
}
function checkemail($email)
{
    $sql = "select * from taikhoan WHERE email='" . $email . "'";
    $pro = pdo_query_one($sql);
    return $pro;
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY ID DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function update_taikhoan($id, $username, $pass, $email, $address, $tel)
{
    $sql = "UPDATE taikhoan SET username = '" . $username . "', pass = '" . $pass . "', email = '" . $email . "', address = '" . $address . "', tel = '" . $tel . "' WHERE id=" . $id;
    pdo_execute($sql);
}
