<?php
include('../../config/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productIds'])) {
    $productIds = $_POST['productIds'];
    $placeholders = implode(',', array_fill(0, count($productIds), '?'));
    $query = "UPDATE TAIKHOAN SET TRANGTHAI = 'Khóa tài khoản' WHERE tentk IN (
                SELECT tentk FROM NHANVIEN WHERE manhanvien IN ($placeholders)
            )";
    $stmt = $mysqli->prepare($query);
    
    $types = str_repeat('s', count($productIds));
    $stmt->bind_param($types, ...$productIds);

    if ($stmt->execute()) {
        // Nếu cập nhật thành công, chuyển hướng người dùng trở lại trang chủ
        header('Location: ../../index.php?quanly=homeadmin');
    } else {
        echo "Lỗi khi cập nhật tài khoản: " . $stmt->error;
    }
    $stmt->close();
}

$mysqli->close();
exit();
?>
