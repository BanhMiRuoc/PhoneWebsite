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
</head>
<body>
    <div>
    <?php
        session_start();
        include("pages/header.php");
        include("config/connect.php");
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
    }elseif($tam == 'doimk'){
        include("pages/changepassword.php");
    }
    elseif($tam == 'login'){
        include("pages/login.php");
    }
    elseif($tam == 'signup'){
        include("pages/create_account.php");
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
    <script src="js/doimk.js"></script>
</body>
</html>
