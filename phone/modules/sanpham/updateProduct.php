<?php
include('../../config/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mavach = $_POST['mavach'];
    $tensp = $_POST['tensp'];
    $giagoc = $_POST['giagoc'];
    $giaban = $_POST['giaban'];
    $phanloai = $_POST['phanloai'];
    $tonkho = $_POST['tonkho'];
    $ngaysanxuat = $_POST['ngaysanxuat'];

    // Handle image upload
    if (isset($_FILES['anhsp']) && $_FILES['anhsp']['error'] === UPLOAD_ERR_OK) {
        $imgData = file_get_contents($_FILES['anhsp']['tmp_name']);
        $query = "UPDATE SANPHAM SET tensp=?, giagoc=?, giaban=?, phanloai=?, tonkho=?, ngaysanxuat=?, anhsp=? WHERE mavach=?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('sddsisss', $tensp, $giagoc, $giaban, $phanloai, $tonkho, $ngaysanxuat, $imgData, $mavach);
    } else {
        $query = "UPDATE SANPHAM SET tensp=?, giagoc=?, giaban=?, phanloai=?, tonkho=?, ngaysanxuat=? WHERE mavach=?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('sddsis', $tensp, $giagoc, $giaban, $phanloai, $tonkho, $ngaysanxuat, $mavach);
    }

    if ($stmt->execute()) {
        header('Location: ../../index.php?quanly=detailproduct&id=' . $mavach);
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
