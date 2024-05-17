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
    <link rel="stylesheet" href="../phone/css/customer_management_1.css" />
    <link rel="stylesheet" href="../phone/css/menu.css" />
</head>
<body>
    <div>
    <?php
        include("pages/menu.php");
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
        include "pages/cm2.php";
    }
    elseif($tam == 'doimk'){
        include "pages/doimk.php";
    }
    elseif($tam == 'cm1'){
        include "pages/cm1.php";
    }
    elseif($tam == 'cm2_1'){
        include "pages/cm2_1.php";
    }
    elseif($tam == ''){
        include("pages/login.php");
    }
    else {
        include("pages/login.php");
    }
    ?>
    </div>
    <script src="../phone/js/check_Login.js"></script>
    <script src="../phone/js/check_Sdt.js"></script>
    <script src="../phone/js/check_InfoKHM.js"></script>
    <script src="../phone/js/doimk.js"></script>
</body>
</html>