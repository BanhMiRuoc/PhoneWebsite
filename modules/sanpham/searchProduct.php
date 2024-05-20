<?php
include('../../config/connect.php');

$query = "SELECT mavach, tensp, giaban FROM Sanpham";
$result = $mysqli->query($query);

$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

echo json_encode($products);
?>
