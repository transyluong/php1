<?php
//nhan du lieu tu form
$user= $_POST['username'];
$email = $_POST['email'];
$id = $_POST['sid'];
//ketnoi csdl

require_once "db_connect.php";

//
$capnhat_sql = 
"UPDATE  users SET
username = '$user', email = '$email' 
where id =$id";
//echo $capnhat_sql; exit;
//thuc thi cau lenh 
if(mysqli_query($conn, $capnhat_sql)){
    header("Location: lietke.php");
}