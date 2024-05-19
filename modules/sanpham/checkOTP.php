<?php
include('../../config/connect.php');
session_start();

if(isset($_POST['btn_otp'])) {
    $otp = $_POST['otp'];
    $check_otp = $_SESSION['otp'];
    if ($otp == $check_otp) {
        header('Location:../../index.php?quanly=changepassword');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    } else {
        echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
        echo "<script>setTimeout(function() { window.location.href = '../../index.php?quanly=otp'; }, 3000);</script>";
        // header('Location:../../index.php?quanly=otp');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    }
}

// Đóng kết nối
$mysqli->close();
?>