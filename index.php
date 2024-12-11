<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Chào mừng bạn đến với hệ thống!</h2>
        <p>Chào mừng bạn, bạn đã đăng nhập thành công.</p>
        <a href="logout.php">Đăng xuất</a>
    </div>
</body>
</html>
