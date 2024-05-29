<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname= "myDb";
//connect create
$conn = new mysqli($servername, $username, $password, $DBname);
//check connect
if($conn->connect_error){
    die("connecttion failed: ".$conn->connect_error);

}
echo "connected successfully";
// create database
/*
$sql = "CREATE DATABASE myDB";
if($conn->query($sql)===true){
    echo "Database created successfully";

}else{
    echo "Error creating database:" .$conn-> error;
}
$conn->close();
*/

//Sql to create table
$sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) not NULL,
    email varchar(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conn->query($sql)===true){
    echo "table myguest created successfully";
}else{
    echo "error creating table". $conn->error;
}
$conn->close();

?>


