<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../phone/css/account.css" />
  </head>
  <body>
    <div class="ti-khon-2">
        <div class="container-3">
          <div class="container-9">
            <div class="container-2">
              <div class="rectangle-74">
                <div class="ellipse-7">
                </div>
              </div>
              <div class="nguyn-vn-b">
                <?php
                  // session_start();
                  $username = $_POST['username'];
                  // Truy vấn dữ liệu người dùng
                  $query = "SELECT * FROM Nhanvien WHERE tentk = ?";
                  $stmt = $mysqli->prepare($query);
                  $stmt->bind_param("s", $username);
                  $stmt->execute();
                  $result = $stmt->get_result();

                  // Kiểm tra và lấy dữ liệu
                  $user = null;
                  if ($result && $result->num_rows > 0) {
                      $user = $result->fetch_assoc();
                  }
                ?>
                <?php if ($user): ?>
                    <?php echo $user['hoten']; ?>
                <?php else: ?>
                    Người dùng không tồn tại
                <?php endif; ?>
              </div>
              <div class="container">
                <div class="personal-information">Personal Information</div>
                <div class="sales-history">Sales History</div>
                <div class="change-password">Change Password</div>
                <span class="log-out">Log Out</span>
              </div>
            </div>
            <div class="container-4">
                <div class="personal-information-1">Personal Information</div>
                <div class="container-5">
                    <div class="container-6">
                        <div class="htn-1">Họ tên:</div>
                        <div class="nguyn-vn-b-2"><?php echo $user ? $user['hoten'] : ''; ?></div>
                        <div class="email-1">Email:</div>
                        <div class="nguyenvan-bgmail-com-1"><?php echo $user ? $user['email'] : ''; ?></div>
                        <div class="gii-tnh-1">Giới tính:</div>
                        <div class="nam-1"><?php echo $user ? $user['gioitinh'] : ''; ?></div>
                        <div class="sin-thoi-1">Số điện thoại:</div>
                        <div class="container-2"><?php echo $user ? $user['sodienthoai'] : ''; ?></div>
                        <div class="ngy-sinh-1">Ngày sinh:</div>
                        <span class="container-3"><?php echo $user ? $user['ngaysinh'] : ''; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>