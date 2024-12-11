<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUT Feedback System - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        function redirectToLogin() {
            window.location.href = 'login.php'; // Đường dẫn đến trang đăng nhập
        }

        function redirectToRegister() {
            window.location.href = 'register.php'; // Đường dẫn đến trang đăng ký
        }
    </script>
</head>
<body class="bg-gray-100">
  
    <div class="container mx-auto">
        <!-- Header -->
        <div class="bg-white py-4">
            <div class="flex items-center justify-between">
                <img alt="Logo" class="ml-4" height="50" src="https://storage.googleapis.com/a1aa/image/gxLnwDdvR7baHRiwo1shkq7pIRsOEKYWfttCKyKpiTaKCY4JA.jpg" width="50"/>
                <div class="flex-grow text-center">
                    <h1 class="text-xl font-bold text-blue-900">HỆ THỐNG KHẢO SÁT Ý KIẾN NGƯỜI HỌC</h1>
                    <h2 class="text-lg text-gray-700">DUT Feedback System</h2>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="bg-blue-500 text-white py-2">
            <div class="flex justify-center space-x-4">
                <a class="hover:underline" href="#">Trang chủ</a>
                <a class="hover:underline" href="#">Lịch khảo sát và hướng dẫn</a>
                <a class="hover:underline" href="#" onclick="redirectToLogin()">Đăng nhập</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex justify-center mt-4">
            <div class="w-3/4 bg-white p-4 shadow-md">
                <h2 class="text-center text-2xl font-bold mb-4">Chào mừng đến với hệ thống!</h2>
                <p class="text-center mb-4 text-gray-700">
                    Hệ thống giúp khảo sát ý kiến người học một cách dễ dàng và hiệu quả. Hãy đăng nhập hoặc đăng ký để bắt đầu.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="login.php"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Đăng nhập</button></a>
                    <a href="register.php"><button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Đăng ký</button></a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-blue-900 text-white py-4 mt-4">
            <div class="container mx-auto text-center text-sm">
                <p>© 2024 - Trường Đại học Bách khoa - Đại học Đà Nẵng</p>
            </div>
        </div>
    </div>
</body>
</html>
