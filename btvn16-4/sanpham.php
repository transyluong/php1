<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Product {
    // Các thuộc tính
    public $id;
    public $name;
    public $price;
    public $amount;
    public $company;
    public $year;

    // Hàm khởi tạo (constructor)
    public function __construct($id, $name, $price, $amount, $company, $year) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->company = $company;
        $this->year = $year;
    }

    // Phương thức in thông tin sản phẩm
    public function printInfo() {
        echo "Product ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: {$this->price}\n";
        echo "Amount: {$this->amount}\n";
        echo "Company: {$this->company}\n";
        echo "Year: {$this->year}\n";
    }
}

// Sử dụng lớp Product
$product1 = new Product(1, "Áo thun", 200000, 50, "ABC Fashion", 2024);
$product1->printInfo();
?>

</body>
</html>