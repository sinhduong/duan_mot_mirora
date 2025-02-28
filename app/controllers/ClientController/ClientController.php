<?php
if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
    switch ($redirect) {
        case 'dangky':
            if (isset($_POST['dangky'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cfpass = $_POST['cfpass'];

                if ($cfpass == $pass) {
                    // Gọi hàm đăng ký tài khoản
                    dangkytaikhoan($name, $email, $pass);

                    // Lưu thông tin người dùng vào session để tự động đăng nhập
                    $_SESSION['user'] = [
                        'email' => $email,
                        'pass' => $pass,
                        // Thêm ID hoặc bất kỳ thông tin nào khác nếu cần
                    ];

                    echo '<script>alert("Đăng ký thành công")</script>';
                    echo '<script>window.location.href="index.php?redirect=dangnhap";</script>'; // Chuyển hướng đến trang chủ
                }
            }
            include "app/views/Client/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $taikhoan = dangnhap($email, $pass);
                if (!empty($taikhoan)) {
                    $_SESSION['taikhoan'] = $taikhoan;
                    echo "<script>window.location.href='index.php';</script>";
                } else {
                    echo '<script>alert("sai tài khoản hoặc mật khẩu")</script>';
                }
            }
            include "app/views/Client/taikhoan/dangnhap.php";
            break;

            // đăng xuất
        case 'dangxuat':
            session_unset();

            echo "<script>window.location.href='index.php';</script>";
            break;
    }
} else {
    // include "app/views/Client/layout/home.php";
}
