<?php
include('../../config/connect.php');
session_start();

if(isset($_POST['btn_change'])) {
    $email = $_SESSION['email'];
    $mkm = $_POST['newpass'];
    $remkm =$_POST['re-newpass'];
    $email_parts = explode("@", $email);

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    if($username == $password){
        $create_account_query = "UPDATE TAIKHOAN SET MK = '$mkm' WHERE TENTK = '$username'";
        if ($mysqli->query($create_account_query) === TRUE) {
            $create_account_query_1 = "UPDATE NHANVIEN SET TRANGTHAI = 'Đã kích hoạt' WHERE TENTK = '$username'";
            if ($mysqli->query($create_account_query_1) === TRUE) {
                echo "Đổi mật khẩu thành công!";
                header('Location:../../');
                exit();
            }
        }
        else {
            echo "Lỗi đổi mật khẩu: " . $mysqli->error;
            header('Location:../../index.php?quanly=changepassword');
            exit();
        }
    }
    else {
        $create_account_query = "UPDATE TAIKHOAN SET MK = '$mkm' WHERE TENTK = '$email_parts[0]'";
        if ($mysqli->query($create_account_query) === TRUE) {
            echo "Đổi mật khẩu thành công!";
            header('Location:../../');
            exit();
        }
        else {
            echo "Lỗi đổi mật khẩu: " . $mysqli->error;
            header('Location:../../index.php?quanly=changepassword');
            exit();
        }
    }
}

// Đóng kết nối
$mysqli->close();
?>