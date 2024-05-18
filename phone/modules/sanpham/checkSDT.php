<?php
include('../../config/connect.php');
session_start();

if(isset($_POST['btn_cont'])) {
    $sdt = $_POST['sdt'];
    $_SESSION['sdt'] = $sdt;
    $sel_sdt = "SELECT COUNT(*) FROM KHACHHANG WHERE SODIENTHOAI = '$sdt'";
    $result = $mysqli->query($sel_sdt);
    $row = $result->fetch_row(); // Lấy kết quả từ truy vấn COUNT
    $count = $row[0]; // Lấy giá trị COUNT

    if ($count > 0) {
        header('Location:../../index.php?quanly=cm2');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    } else {
        header('Location:../../index.php?quanly=cm2_1');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    }
}

// Đóng kết nối
$mysqli->close();
?>
