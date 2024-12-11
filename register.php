<?php
include 'db.php';
session_start();

$username = '';
$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username']; // Lưu giá trị nhập vào để hiển thị lại
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Kiểm tra tên người dùng đã tồn tại
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        $error_message = "Tên đăng nhập đã tồn tại. Vui lòng thử lại!";
    } else {
        // Thêm người dùng mới vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        $success_message = "Bạn đã đăng ký thành công! Hãy <a href='login.php' style='color: blue; text-decoration: underline;'>đăng nhập</a>.";
        $username = ''; // Reset giá trị username sau khi đăng ký thành công
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .message {
            margin: 15px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng ký</h2>

        <?php if (!empty($success_message)): ?>
            <div class="message success">
                <?php echo $success_message; ?>
            </div>
        <?php else: ?>
            <?php if (!empty($error_message)): ?>
                <div class="message error">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="username" placeholder="Tên đăng nhập" value="<?php echo htmlspecialchars($username); ?>" required>
                <input type="password" name="password" placeholder="Mật khẩu" required>
                <button type="submit">Đăng ký</button>
            </form>
        <?php endif; ?>

        <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
</body>
</html>
