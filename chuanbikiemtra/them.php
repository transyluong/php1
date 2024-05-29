<?php


//nhan du lieu tu form
$username = $_POST["username"];
$email = $_POST['email'];

require_once "db_connect.php";



//
$them_sql = 
"INSERT into users
(username, email) VALUES ('$username', '$email')";

//thuc thi cau lenh 
if(mysqli_query($conn, $them_sql)){
    header("Location: lietke.php");
}