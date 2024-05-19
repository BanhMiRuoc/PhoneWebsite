<?php
header('Content-Type: application/json');

// Kết nối đến cơ sở dữ liệu
include("config/connect.php");

// Truy vấn cơ sở dữ liệu để lấy danh sách sản phẩm
$sql = "SELECT phanloai, giagoc, giaban, anhsp, tensp, mavach, daban, tonkho, ngaysanxuat FROM Sanpham";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    // Lấy dữ liệu từ cơ sở dữ liệu
    while ($row = $result->fetch_assoc()) {
        $products[] = array(
            "imgSrc" => "data:image/jpeg;base64," . base64_encode($row["anhsp"]),
            "title" => $row["tensp"],
            "price" => number_format($row["giaban"], 0, ',', '.') . 'đ'
        );
    }
}

// Đóng kết nối
$conn->close();

// Trả về dữ liệu dạng JSON
echo json_encode($products);
?>
