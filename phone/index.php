<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Jockey+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MeoPhones</title>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
    <link href="bootstrap-rating.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap-rating.js"></script> -->

    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/customer_management_1.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/forgot_password.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home_admin.css">
    <link rel="stylesheet" href="css/detail_product.css">
    <link rel="stylesheet" href="css/add_product.css">
    <link rel="stylesheet" href="css/report.css">
</head>
<body>
    <div>
    <?php
    include("config/connect.php");
    if (isset($_GET['quanly']) && $_GET['quanly'] == 'activate' && isset($_GET['code'])) {
        $code = $_GET['code'];
        $activation_query = "SELECT * FROM TAIKHOAN WHERE activation_code = '$code' AND trangthai = 'Chưa kích hoạt'";
        $result = $mysqli->query($activation_query);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $current_time = date('Y-m-d H:i:s');
            if ($current_time <= $row['activation_expiry']) {
                $update_query = "UPDATE TAIKHOAN SET trangthai = 'Đã kích hoạt', activation_code = NULL, activation_expiry = NULL WHERE activation_code = '$code'";
                if ($mysqli->query($update_query) === TRUE) {
                    echo "<script>alert('Kích hoạt tài khoản thành công');</script>";
            } else {
                echo "<script>alert('Mã kích hoạt không hợp lệ');</script>";
            }
        } else {
            echo "<script>alert('Mã kích hoạt đã hết hạn');</script>";
        }
    }
    else {
        echo "<script>alert('Mã kích hoạt không hợp lệ');</script>";
        exit();
    }
}

        session_start();
        include("pages/header.php");
    ?>
    <?php
    
    if(isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    }
    else {
        $tam = '';
    }

    if($tam == 'cm2'){
        include("pages/cm2.php");
    }
    elseif($tam == 'cm1'){
        include("pages/cm1.php");
    }
    elseif($tam == 'cm2_1'){
        include("pages/cm2_1.php");
    }
    elseif($tam == 'cm1'){
        include("pages/cm1.php");
    }
    elseif($tam == 'login'){
        include("pages/login.php");
    }
    elseif($tam == 'signup'){
        include("pages/create_account.php");
    }
    elseif($tam == 'forgotpassword'){
        include("pages/forgot-password/forgot_password.php");
    }
    elseif($tam == 'report'){
        include("pages/report.php");
    }
    elseif($tam == 'addproduct'){
        include("pages/admin/navbar.php");
        include("pages/add_product.php");
    }
    elseif($tam == 'changepassword'){
        include("pages/forgot-password/change_password.php");
    }
    elseif($tam == 'otp'){
        include("pages/forgot-password/otp.php");
    }
    elseif($tam == 'homeadmin'){
        include("pages/admin/navbar.php");
        include("pages/home_admin.php");
    }
    elseif($tam == 'listcustomer'){
        include("pages/admin/navbar.php");
        include("pages/list_customer.php");
    }
    elseif($tam == 'report'){
        include("pages/admin/navbar.php");
        include("pages/report.php");
    }
    elseif($tam == 'liststaff'){
        include("pages/admin/navbar.php");
        include("pages/list_staff.php");
    }
    elseif($tam == 'listcustomer'){
        include("pages/admin/navbar.php");
        include("pages/list_customer.php");
    }
    // elseif($tam == 'lsbh'){
    //     include("pages/lichsubanhang.php");
    // }
    elseif($tam == 'detailproduct'){
        include("pages/admin/navbar.php");
        include("pages/detail_product.php");
    }
    elseif($tam == 'home&login=true'){
        include("pages/home.php");
    }
    else {
        include("pages/home.php");
    }

    include("pages/footer.php")
    ?>
    </div>

    <script>
        <?php
    // Truy vấn cơ sở dữ liệu để lấy danh sách sản phẩm
    $sql = "SELECT anhsp, tensp, giaban FROM SANPHAM";
    $result = $mysqli->query($sql);

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
    $mysqli->close();
    ?>
        var products = <?php echo json_encode($products); ?>;
    </script>
    <script src="js/home.js"></script>
    <script src="js/redirect.js"></script>
    <script src="js/check_Login.js"></script>
    <script src="js/check_Sdt.js"></script>
    <script src="js/check_InfoKHM.js"></script>
    <script src="js/check_Email.js"></script>
    <script src="js/check_OTP.js"></script>
    <script src="js/check_ChangePass.js"></script>
    <script src="js/home_admin.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/getListProduct.js"></script>
</body>
</html>
