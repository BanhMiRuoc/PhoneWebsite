<?php
include('../../config/connect.php');

if(isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password =$_POST['password'];

    $sel_account = "SELECT COUNT(*) FROM TAIKHOAN WHERE TENTK = '$username' AND MK='$password'";


    $result = $mysqli->query($sel_account);
    $row = $result->fetch_row(); // Lấy kết quả từ truy vấn COUNT
    $count = $row[0]; // Lấy giá trị COUNT

    if ($count > 0) {
        header('Location:../../index.php?quanly=home&login=true');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    }
    else {
        header('Location:../../');
        exit(); // Dừng việc thực thi mã PHP ngay sau khi chuyển hướng
    }
}

// Đóng kết nối
$mysqli->close();
?>
