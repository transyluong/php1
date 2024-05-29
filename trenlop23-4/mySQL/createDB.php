<?php
$servername = "localhost";
$username = "root";
$password = "";
//connect create
$conn = new mysqli($servername,$username,$password);
//check connect
if($conn->connect_error){
    die("connecttion failed: ".$conn->connect_error);

}
echo "connected successfully";
// create database
$sql = "CREATE DATABASE myDB";
if($conn->query($sql)===true){
    echo "Database created successfully";

}else{
    echo "Error creating database:" .$conn-> error;
}

$conn->close();



?>


