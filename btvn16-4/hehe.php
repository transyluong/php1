<!DOCTYPE html>
<html>
<head>
    <title>Form nhập thông tin sản phẩm</title>
</head>
<body>
    <?php
    // Khai báo lớp Product
    class Product {
        public $ID;
        public $name;
        public $price;
        public $amount;
        public $company;
        public $year;
    }

    // Xử lý dữ liệu khi form được submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product = new Product();
        $product->ID = $_POST["ID"];
        $product->name = $_POST["name"];
        $product->price = $_POST["price"];
        $product->amount = $_POST["amount"];
        $product->company = $_POST["company"];
        $product->year = $_POST["year"];

        // Lưu thông tin sản phẩm vào cơ sở dữ liệu hoặc thực hiện các xử lý khác
        // ...

        echo "Thông tin sản phẩm đã được ghi nhận!";
    }
    ?>

    <form action="" method="post">
        <label for="ID">ID:</label>
        <input type="text" id="ID" name="ID"><br>

        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name"><br>

        <label for="price">Giá:</label>
        <input type="text" id="price" name="price"><br>

        <label for="amount">Số lượng:</label>
        <input type="text" id="amount" name="amount"><br>

        <label for="company">Công ty sản xuất:</label>
        <input type="text" id="company" name="company"><br>

        <label for="year">Năm sản xuất:</label>
        <input type="text" id="year" name="year"><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
