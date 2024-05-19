<?php
include('../../config/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productIds'])) {
    $productIds = $_POST['productIds'];
    $placeholders = implode(',', array_fill(0, count($productIds), '?'));
    $query = "DELETE FROM SANPHAM WHERE mavach IN ($placeholders)";
    $stmt = $mysqli->prepare($query);
    
    $types = str_repeat('s', count($productIds));
    $stmt->bind_param($types, ...$productIds);

    if ($stmt->execute()) {
        echo "Sản phẩm đã được xóa thành công.";
        header('Location: ../../index.php?quanly=home');
    } else {
        echo "Lỗi khi xóa sản phẩm: " . $stmt->error;
    }
    $stmt->close();
}

$mysqli->close();
exit();
?>
