<?php
include('../../config/connect.php');
include('../../mail/sendmail.php');

if (isset($_POST['btn_Create'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    
    // Tách email lấy tài khoản
    $email_parts = explode("@", $email);
    if (count($email_parts) == 2) {
        $tentk = $email_parts[0];
    } else {
        echo "Email không hợp lệ: " . $email . "<br><br>";
        exit();
    }
    
    // Tạo mã kích hoạt và thời gian hết hạn
    $activation_code = md5(uniqid(rand(), true));
    $activation_expiry = date('Y-m-d H:i:s', strtotime('+1 minute'));
    
    $create_account_query = "INSERT INTO TAIKHOAN (tentk, mk, quyen, activation_code, activation_expiry, trangthai) VALUES ('$tentk', '$tentk', 'NV', '$activation_code', '$activation_expiry', 'Chưa kích hoạt')";

    if ($mysqli->query($create_account_query) === TRUE) {
        echo "Tạo tài khoản cho nhân viên mới thành công";

        $insert_query = "INSERT INTO Nhanvien (hoten, email, gioitinh, chucvu, sodienthoai, trangthai, tentk) VALUES ('$name', '$email', '$gender', '$role', $phone, 'Chưa kích hoạt', '$tentk')";

        if ($mysqli->query($insert_query) === TRUE) {
            echo "Thêm mới nhân viên thành công!";
            
            // Gửi mail
            $activation_link = "http://localhost/phone/index.php?quanly=activate&code=$activation_code";
            $body = "<p> Vui lòng nhấp vào link sau để kích hoạt tài khoản trong vòng 1 phút:</p>
            <a href='$activation_link'>Kích hoạt tài khoản</a>";
            $subject = "Tạo tài khoản nhân viên $name";
            $mail = new Mailer();
            $mail->createAcc($email, $body, $subject);

            header('Location:../../index.php?quanly=liststaff');
            exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
        } else {
            echo "Lỗi thêm nhân viên: " . $mysqli->error;
            header('Location:../../index.php?quanly=signup');
            exit();
        }
    } else {
        echo "Lỗi thêm tài khoản nhân viên mới: " . $mysqli->error;
        header('Location:../../index.php?quanly=signup');
        exit();
    }
}

// Đóng kết nối
$mysqli->close();

?>
