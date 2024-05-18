<?php
include('../../config/connect.php');
include('../../mail/sendmail.php');

if(isset($_POST['btn_Create'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =$_POST['email'];
    $role =$_POST['role'];
    $gender =$_POST['gender'];
    //tách email lấy tài khoản
    $email_parts = explode("@", $email);
    if (count($email_parts) == 2) {
        $tentk = $email_parts[0];
    } else {
        echo "Email không hợp lệ: " . $email . "<br><br>";
    }
    $create_account_query = "INSERT INTO TAIKHOAN (tentk, mk, quyen) VALUES ('$tentk', '$tentk', 'NV')";


    if ($mysqli->query($create_account_query) === TRUE) {
        echo "Tạo tài khoản cho nhân viên mới thành công";

        $insert_query = "INSERT INTO Nhanvien (hoten, email, gioitinh, chucvu, sodienthoai, trangthai, tentk) VALUES ('$name', '$email', '$gender', '$role', null, 'Chưa kích hoạt', '$tentk')";

        if ($mysqli->query($insert_query) === TRUE) {
            echo "Thêm mới nhân viên thành công!";
            //gửi mail
            $body = "<a href='http://localhost/phone/index.php?quanly=login'>to my MeoPhones</a>";
            $mail = new Mailer();
            $mail->createAcc($email, $name, $body);

            header('Location:../../index.php?quanly=home&login=true');
            exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
        } else {
            echo "Lỗi thêm khách hàng: " . $mysqli->error;
            header('Location:../../index.php?quanly=signup');
            exit();
        }
    }
    else {
        echo "Lỗi thêm tài khoản nhân viên mới: " . $mysqli->error;
        header('Location:../../index.php?quanly=signup');
        exit();
    }
}

// Đóng kết nối
$mysqli->close();
?>
