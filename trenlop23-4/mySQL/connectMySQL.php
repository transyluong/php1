
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
?>