<?php
    session_start();
    include("admincp/config/config.php");
    if (isset($_POST))
?>
<section class="login" href="index.php?user=login">
    <div class="login-address container">
        <div class="p-2">
            <p class="login-address-content text-uppercase fw-bold">
                HOME
                <img src="assets/images/next.png" alt="icon next" class="icon-next mb-1">
                Login
            </p>
        </div>
    </div>
    <div class="login-content">
        <div class="logo">
            <img src="assets/images/mobile_11.png" width="10%" height="20%" alt="">
            <h1>LOGIN</h1>
        </div>
        <form class="login-form" method="POST" autocomplete="off" action-="modules/sanpham/checkLogin.php" id="login-form">
            <div class="form-group form-check">
                <label for="inputEmail1">Username</label>
                <input type="email" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group form-check my-5">
                <label for="inputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="form-group form-check d-flex justify-content-end">
                <a href="index.php?user=login&action=forgot">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn sm btn-primary" href="#" name="dangnhap">Đăng nhập</button>
        </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</section>