<?php
class DBProduct{

    
/*
    public $id;
    public $pname;
    public $company;
    public $year;
    public $band;

    public function __construct($id,$pname,$company,$year,$band)
    {
        $this->id = $id;
        $this->pname = $pname;
        $this->company = $company;
        $this->year = $year;
        $this->band = $band;
    }
*/
    
    public function connectDB(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DBname= "productDB";
        //connect create
        $conn = new mysqli($servername, $username, $password, $DBname);
        //check connect
        if($conn->connect_error){
            die("connecttion failed: ".$conn->connect_error);
        
        } 
        echo "connected successfully";  
        return $conn;
                  
    }

    public function ShowProduct(){
        $sql = "SELECT id, pname, company, year, band FROM tblproduct";
        $conn = $this->connectDB();
        $result = $conn->query($sql);
        
        if ($result->num_rows>0){
            //output data of each row
            while ($row = $result -> fetch_assoc()){
                echo $row["id"]."-".$row["pname"]."-".$row["company"]."-".$row["year"]."-".$row["band"]."<br>";
        
            }
        }else{
            echo "0 results";
        }
        $conn->close();
                

    }
}
