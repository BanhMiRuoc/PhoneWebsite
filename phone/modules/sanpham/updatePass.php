<?php
include('../../config/connect.php');
session_start();

if(isset($_POST['btn_change'])) {
    $email = $_SESSION['email'];
    $mkm = $_POST['newpass'];
    $remkm =$_POST['re-newpass'];
    $email_parts = explode("@", $email);

    $create_account_query = "UPDATE TAIKHOAN SET MK = '$mkm' WHERE TENTK = '$email_parts[0]'";


    if ($mysqli->query($create_account_query) === TRUE) {
        echo "Đổi mật khẩu thành công!";
        header('Location:../../');
    }
    else {
        echo "Lỗi đổi mật khẩu: " . $mysqli->error;
        header('Location:../../index.php?quanly=changepassword');
        exit();
    }
}

// Đóng kết nối
$mysqli->close();
?>