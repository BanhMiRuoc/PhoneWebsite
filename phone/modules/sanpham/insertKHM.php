<?php
include('../../config/connect.php');
session_start();

if(isset($_POST['btn_cont1'])) {
    $sdt = $_SESSION['sdt'];
    $hoten = $_POST['hoten'];
    $diachi =$_POST['diachi'];

    $create_account_query = "INSERT INTO TAIKHOAN (tentk, mk, quyen) VALUES ('$sdt', '123', 'KH')";


    if ($mysqli->query($create_account_query) === TRUE) {
        echo "Tạo tài khoản cho khách hàng mới thành công";

        $insert_query = "INSERT INTO Khachhang (hoten, diachi, sodienthoai, tentk) VALUES ('$hoten', '$diachi', '$sdt', '$sdt')";

        if ($mysqli->query($insert_query) === TRUE) {
            echo "Thêm mới khách hàng thành công!";
            header('Location:../../index.php?quanly=cm2');
            exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
        } else {
            echo "Lỗi thêm khách hàng: " . $mysqli->error;
            header('Location:../../index.php?quanly=cm2_1');
            exit();
        }
    }
    else {
        echo "Lỗi thêm tài khoản mới: " . $mysqli->error;
        header('Location:../../index.php?quanly=cm2_1');
        exit();
    }
}

// Đóng kết nối
$mysqli->close();
?>
