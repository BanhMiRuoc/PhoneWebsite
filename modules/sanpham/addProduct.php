<?php
// Include file kết nối đến cơ sở dữ liệu
include('../../config/connect.php');

// Kiểm tra xem form đã được submit chưa và dữ liệu ảnh đã được gửi đi chưa
if(isset($_POST['btn_add'])) {
    echo "<script>alert('Lần đầu tiên đăng nhập, vui lòng đổi mật khẩu!');</script>";
    // Lấy dữ liệu từ form
    $name = $_POST['input_nameLecture'];
    $realPrice = $_POST['input_realPrice'];
    $price = $_POST['input_Price'];
    $category = $_POST['input_categories'];
    $sold = $_POST['input_selled'];
    $inventory = $_POST['input_inventory'];
    $date = $_POST['input_date'];
    
    // Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
    if (isset($_FILES['input_pictureLecture']) && $_FILES['input_pictureLecture']['error'] === UPLOAD_ERR_OK) {
        $imgData = file_get_contents($_FILES['input_pictureLecture']['tmp_name']);
        $query = "INSERT INTO SANPHAM (tensp, giagoc, giaban, phanloai, daban, tonkho, ngaysanxuat, anhsp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssssssss", $name, $realPrice, $price, $category, $sold, $inventory, $date, $imgData);

        // Thực hiện truy vấn SQL
        if($stmt->execute()) {
            echo "Thêm sản phẩm thành công!";
            header('Location:../../index.php?quanly=homeadmin');
        } else {
            echo "Thêm sản phẩm không thành công: " . $stmt->error;
            header('Location:../../index.php?quanly=addproduct');
        }
    }
    else {
        $query = "INSERT INTO SANPHAM (tensp, giagoc, giaban, phanloai, daban, tonkho, ngaysanxuat) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sssssss", $name, $realPrice, $price, $category, $sold, $inventory, $date);

        // Thực hiện truy vấn SQL
        if($stmt->execute()) {
            echo "Thêm sản phẩm thành công!";
            header('Location:../../index.php?quanly=homeadmin');
        } else {
            echo "Thêm sản phẩm không thành công: " . $stmt->error;
            header('Location:../../index.php?quanly=addproduct');
        }
    }

    // Đóng kết nối
    $stmt->close();
} else {
    echo "Có lỗi xảy ra khi upload ảnh sản phẩm: " . $_FILES['input_pictureLecture']['error'];
}

$mysqli->close();
?>