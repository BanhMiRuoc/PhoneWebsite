<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title web -->
    <title>MeoPhones</title>
    <!-- add font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Jockey+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
    <!-- add bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
    <!-- Add logo -->
    <link rel="icon" type="image/x-icon" href="logo.png">
    <!-- Add css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home_admin.css">
    <link rel="stylesheet" href="css/create_order.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- add js -->
    <script src="js/create_order.js"></script>
</head>
<body>
    <div>
        <div class="header"><?php include("pages/header.php"); ?></div>
        <div class="container-home">
            <div class="navbar"><?php include("pages/navbar.php") ?></div>
            <div class="content">
                <h1>CREATE ORDER</h1>
                <div class="container">
                    <section class="thong-tin-khach-hang">
                        <h2>Customer Infomation</h2>
                        <form action="#">
                            <label for="ten">Name:</label>
                            <input type="text" id="ten" name="ten" required>

                            <label for="sdt">Phone number:</label>
                            <input type="tel" id="sdt" name="sdt" required>

                            <label for="diachi">Address:</label>
                            <textarea id="diachi" name="diachi" rows="5" required></textarea>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <div class="footer"><?php include("pages/footer.php"); ?></div>
</body>
</html>