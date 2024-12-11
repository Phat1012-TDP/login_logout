<?php
$host = 'localhost';
$dbname = 'login_logout';
$user = 'root'; // Thay bằng user của bạn
$password = ''; // Thay bằng mật khẩu của bạn

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}
?>
