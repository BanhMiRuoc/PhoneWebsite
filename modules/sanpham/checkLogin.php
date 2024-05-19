<?php
include('../../config/connect.php');
session_start();

if(isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password =$_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $sel_account = "SELECT COUNT(*) FROM TAIKHOAN WHERE TENTK = '$username' AND MK='$password'";


    $result = $mysqli->query($sel_account);
    $row = $result->fetch_row(); // Lấy kết quả từ truy vấn COUNT
    $count = $row[0]; // Lấy giá trị COUNT

    if ($count > 0) {
        $sel_tt = "SELECT trangthai, quyen FROM TAIKHOAN WHERE TENTK = '$username'";
        $result1 = $mysqli->query($sel_tt);
        $row1 = $result1->fetch_row();
        $trangthai = $row1[0];
        if ($trangthai == "Chưa kích hoạt"){
            echo "<script>alert('Vui lòng đăng nhập bằng cách nhấp vào liên kết trong email của bạn');</script>";
        }
        elseif ($trangthai == "Khóa tài khoản"){
            echo "<script>alert('Tài khoản của bạn đã bị khóa!');</script>";
            echo "<script>setTimeout(function() { window.location.href = '../../'; }, 1000);</script>";
            exit();
        }
        else{
            $sel_ttnv = "SELECT trangthai FROM NHANVIEN WHERE TENTK = '$username'";
            $result2 = $mysqli->query($sel_ttnv);
            $row2 = $result2->fetch_row();
            $trangthai1 = $row2[0];
            if($trangthai1 == "Chưa kích hoạt"){
                echo "<script>alert('Lần đầu tiên đăng nhập, vui lòng đổi mật khẩu!');</script>";
                echo "<script>setTimeout(function() { window.location.href = '../../index.php?quanly=changepassword'; }, 1000);</script>";
                exit();
            }
            else{
                if($row1[1] == 'AD'){
                    header('Location:../../index.php?quanly=homeadmin');
                    exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
                }
                else{
                    header('Location:../../index.php?quanly=home&login=true');
                    exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
                }
            }
        }
    }
    else {
        echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
        echo "<script>setTimeout(function() { window.location.href = '../../index.php?quanly=login'; }, 1000);</script>";
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    }
}

// Đóng kết nối
$mysqli->close();
?>
