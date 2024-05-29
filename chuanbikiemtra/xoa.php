<?php
$id = $_GET['sid'];
//ket noi
require_once "db_connect.php";
//cau lanh sql
$xoa_sql = "DELETE from users where id = $id";

mysqli_query($conn,$xoa_sql);
//tro ve trang liet ke
header("Location: lietke.php");