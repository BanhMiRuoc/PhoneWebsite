<div class="customer-management-1">
      <div class="menu">
        <div class="container">
          <span class="customer-management">
          Home
          </span>
          <div class="arrow-down-sign-to-navigate-3">
          </div>

          <span class="customer-management">
          Login
          </span>
          <div class="arrow-down-sign-to-navigate-3">
          </div>

          <span class="customer-management">
          Change password
          </span>
        </div>   
      </div>
      
      <div class="forgot-password">
    <div class="forgot-password-content">
        <div class="logo">
            <img src="assets/images/mobile_11.png" width="10%" height="20%" alt="">
            <h1>Change password</h1>
        </div>
        <small class="forgot-password-attention d-flex justify-content-center" style="margin-top: 4rem">Vui lòng đặt lại mật khẩu cho lần đăng nhập tiếp theo</small>
        <form class="forgot-password-form mt-4" id="changeForm" method="POST" action="modules/sanpham/updatePass.php">
            <div class="form-group">
                <label class="mb-1" for="exampleInputEmail1">Enter your new password</label>
                <input type="text" name="newpass" id="newpass" class="mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new password" style="border-radius: 1.5rem; display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da;">
            </div>
            <div class="form-group">
                <label class="mb-1" for="exampleInputEmail1">Re-enter your new password</label>
                <input type="text" name="re-newpass" id="re-newpass" class="mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Re-enter new password" style="border-radius: 1.5rem; display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da;">
            </div>
            <button type="submit" name="btn_change" style="margin-top: 0.1rem;" class="btn sm btn-primary text-uppercase mb-1" href="index.php?user=login&action=">continue</button>
            <div class="d-flex justify-content-end" style="margin-top: 0.5rem;">
                <img src="assets/images/next.png" alt="icon next" class="icon-next mt-1">
                <a href="index.php?user=login" class="turn-back fw-semibold">Trở lại đăng nhập</a>
            </div> 
        </form>
    </div>
</div>
</div>

