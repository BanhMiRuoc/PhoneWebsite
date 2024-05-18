<div class="main">
      <div class="menu">
        <div class="container-1">
          <span class="account">
          ACCOUNT MANAGEMENT
          </span>
          <div class="arrow-down-sign-to-navigate-3">
          </div>
        </div>
      </div>
      <div class="tn-ca-hng">
      CHANGE PASSWORD
      </div>
      
      <div style="position: relative; display: flex; justify-content: center; align-items: top; border: 1px solid #E37596; align-self: center; width: 890px; height: 700px;">
        <div class="logo"></div>
        <p style="position: absolute; top: 10%; bottom: 10px; left: 0; right: 0; text-align: center; color: #E37596; font-size: 20px; font-family: 'JetBrains Mono';">Enter your old and new password please.</p>
        <form id="changePasswordForm" method="POST" action="../modules/sanpham/doimk.php">
        <div class="form-group">
              <label for="exampleInputEmail1">Mật khẩu hiện tại/label>
              <input type="text" class="form-control1" id="mkcu" aria-describedby="emailHelp" placeholder="Enter old password" name="mkcu">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control1" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group form-check">
              <a href="forgot-password">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn sm btn-primary" name="btn-login" id="btn-login">Đăng nhập</button>
        <p style="position: absolute; top: 15%; bottom: 10px; left: 25%; right: 0; color: #5754A3; font-size: 20px; font-family: 'JetBrains Mono'; font-weight:bold;">Mật khẩu hiện tại</p>
        <input id="mkcu" type = "text" class="textbox-input-password" name = "mkcu">
        <p style="position: absolute; top: 35%; bottom: 10px; left: 25%; right: 0; color: #5754A3; font-size: 20px; font-family: 'JetBrains Mono'; font-weight:bold;">Mật khẩu mới</p>
        <input id="mkmoi" type = "text" class="textbox-input-newpass" name = "mkmoi">
        <p style="position: absolute; top: 55%; bottom: 10px; left: 25%; right: 0; color: #5754A3; font-size: 20px; font-family: 'JetBrains Mono'; font-weight:bold;">Nhập lại mật khẩu mới</p>
        <input id="mknhaplai" type = "text" class="textbox-input-re-enter" name = "mknhaplai">
        <span><button id="next-1" class="btn-next-1" name="btn_change_password" type="submit">CONTINUE</button></span>
        <form>
        <span><a href="index.php?quanly=doimk" style="font-family: 'JetBrains Mono'; font-size: 20px;position: absolute; top: 90%; left: 45%; bottom: 10px; text-decoration: none; text-align: center; line-height: 66px;"> < Trở lại</a></span>
    </div>
    </div>
  </body>
</html>