<?php
include('../../config/connect.php');
include('../../mail/sendmail.php');
session_start();

function generateOTP($length = 6) {
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= mt_rand(0, 9);
    }
    return $otp;
}
if(isset($_POST['btn_forgot'])) {
    $email = $_POST['email-f'];
    $sel_email = "SELECT COUNT(*) FROM NHANVIEN WHERE EMAIL = '$email'";
    $result = $mysqli->query($sel_email);
    $row = $result->fetch_row(); // Lấy kết quả từ truy vấn COUNT
    $count = $row[0]; // Lấy giá trị COUNT

    $otp = generateOTP();
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;
    if ($count > 0) {
        // Gửi mail
        $body = "Mã xác thực OTP: $otp";
        $subject = "Xác thực OTP đổi mật khẩu";
        $mail = new Mailer();
        $mail->createAcc($email, $body, $subject);

        header('Location:../../index.php?quanly=otp');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    } else {
        echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
        echo "<script>setTimeout(function() { window.location.href = '../../index.php?quanly=forgotpassword'; }, 3000);</script>";
        // header('Location:../../index.php?quanly=forgotpassword');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    }
}

// Đóng kết nối
$mysqli->close();
?>