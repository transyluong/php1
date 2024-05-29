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


$sql = "INSERT INTO Myguests(firstname, lastname, email)
VALUES ('Jhon','Doe','Jhon@exmple.com')";
if ($conn->query($sql)==true){
    echo "new reocd created successfully";
}else{
    echo "error:" . $sql. "<br>" . $conn->error;
}
$conn->close();
?>