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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
    <link href="bootstrap-rating.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap-rating.js"></script>
    <!-- Add logo -->
    <link rel="icon" type="image/x-icon" href="logo.png">
    <!-- Add css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main_no_register.css">
    <link rel="stylesheet" href="css/customer_management_1.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/create_account.css">
    <!-- add js -->
</head>
<body>
    <div>
        <?php
            include("pages/header.php");
        ?>
        <div class="container register-form">
            <div class="form">
                <div class="logo">
                    <img src="assets/images/mobile_11.png" width="10%" height="20%" alt="">
                    <h1>CREATE ACCOUNT</h1>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Full name</label>
                                <input type="text" class="form-control" placeholder="Your Name" value=""/>
                            </div>
                            <div class="form-group">
                                <label for="inputPhoneNumber">Phone number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control" placeholder="Your email" value=""/>
                            </div>
                            <div class="form-group">
                                <label for="inputRole">Role</label>
                                <input type="text" class="form-control" placeholder="Role" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ratio-gender">
                                <label for="inputGender">Gender</label>
                                <div>
                                    <input type="radio"  name="gender" id="gender-male"> Male
                                    <input type="radio"  name="gender" id="gender-female"> Female

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">CREATE</button>
                </div>
            </div>
        </div>
        <?php
            include("pages/footer.php");
        ?>
    </div>
</body>
</html>