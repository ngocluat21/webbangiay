<?php
function insert_taikhoan($username, $pass, $email)
{
    $sql = "insert into taikhoan(username,pass,email) values('$username','$pass','$email')";
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
