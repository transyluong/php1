<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Xử lý dữ liệu (ví dụ: lưu vào cơ sở dữ liệu, gửi email, ...)
    // ...

    echo "Chào mừng bạn, $name! Email của bạn là: $email";
}
?>
