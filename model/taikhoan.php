<?php
<<<<<<< HEAD
function insert_taikhoan($username, $pass, $email)
{
    $sql = "insert into taikhoan(username,pass,email) values('$username','$pass','$email')";
=======
function insert_taikhoan($username,$pass,$email, $address, $tel){
    $sql="insert into taikhoan(username,pass,email, address, tel) values('$username','$pass','$email', '$address', '$tel')";
>>>>>>> b377a404adfee57354b0c94b140673a472e28c15
    pdo_execute($sql);
}
function checkusername($username, $pass)
{
    $sql = "select * from taikhoan where username='" . $username . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $username, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set username='" . $username . "',pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
