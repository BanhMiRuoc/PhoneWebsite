    <div class="section-item">
        <div class="logo">
            <img src="assets/images/mobile_11.png" width="10%" height="20%" alt="">
            <h1>LOGIN</h1>
        </div>
        <form class="login-form" method="POST" action="modules/sanpham/checkLogin.php" id="login-form">
            <div class="form-group ">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control1" id="username" aria-describedby="emailHelp" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control1" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group form-check">
              <a href="index.php?quanly=forgotpassword">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn sm btn-primary" name="btn-login" id="btn-login">Đăng nhập</button>
          </form>
  </div>
