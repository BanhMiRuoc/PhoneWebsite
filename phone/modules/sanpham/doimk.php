<?php
include '../../config/connect.php';

if(isset($_POST['btn_change_password'])) {
    echo "check chạy";
    //session_start();
    //$tentk = $_SESSION['tentk'];
    $tentk = 'hn';
    $mkcu = $_POST['mkcu'];
    $mkmoi = $_POST['mkmoi'];
    $mknhaplai = $_POST['mknhaplai'];
    if($mkmoi != $mknhaplai) {
        echo "Mật khẩu mới không được trùng với mật khẩu cũ.";
        header('Location:../../index.php?quanly=doimk');
        exit();
    }
    
    // Kiểm tra độ dài mật khẩu
    if(strlen($mkmoi) < 8) {
        echo "Mật khẩu mới phải có ít nhất 8 ký tự.";
        header('Location:../../index.php?quanly=doimk');
        exit();
    }
    
    // Kiểm tra độ đa dạng của mật khẩu
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if(!preg_match($pattern, $mkmoi)) {
        echo "Mật khẩu mới phải chứa ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt.";
        header('Location:../../index.php?quanly=doimk');
        exit();
    }
    
    // Kiểm tra xem mật khẩu mới có phải là mật khẩu đã sử dụng trước đó không
    $check_old_query = "SELECT mk FROM TAIKHOAN WHERE mk = '$mkmoi'AND tk = '$tentk";
    $result = $mysqli->query($check_old_query);
    if($result->num_rows > 0) {
        echo "Mật khẩu mới không được trùng với mật khẩu cũ.";
        header('Location:../../index.php?quanly=doimk');
        exit();
    }
    
    // Nếu mật khẩu mới đạt được tất cả các yêu cầu, có thể lưu vào cơ sở dữ liệu
    $update_password_query = "UPDATE TAIKHOAN SET mk = '$mkmoi' WHERE tentk = '$tentk'";
    if($mysqli->query($update_password_query)) {
        echo "Cập nhật mật khẩu thành công.";
    } else {
        echo "Đã có lỗi xảy ra khi cập nhật mật khẩu.";
    }
}

$mysqli->close();
?>