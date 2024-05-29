<?php
class MerchandiseProcess {
    private $servername = "localhost";
    private $username = "your_username";
    private $password = "your_password";
    private $dbname = "your_database";

    public function timtheonam($table, $column, $value) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM $table WHERE $column = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        $conn->close();
        return $result;
    }
}
?>