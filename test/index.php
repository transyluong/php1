<!DOCTYPE html>
<html>
<head>
    <title>Merchandise Data</title>
</head>
<body>
    <h1>Merchandise Data</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Year: <input type="text" name="year">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    require_once 'MerchandiseProcess.php';

    // Xử lý form khi người dùng nhấn nút "Submit"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedYear = $_POST["year"];

        // Tạo đối tượng MerchandiseProcess
        $merchandiseProcess = new MerchandiseProcess();

        // Gọi phương thức timtheonam() để truy vấn dữ liệu
        $result = $merchandiseProcess->timtheonam("merchandise", "Year", $selectedYear);

        // Hiển thị dữ liệu
        echo "<h2>Dữ liệu hàng hóa năm " . $selectedYear . ":</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Year</th><th>Amount</th><th>Price</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Year"] . "</td>";
            echo "<td>" . $row["Amount"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>