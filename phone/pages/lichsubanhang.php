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
    <style>
        body {
            color: #5754A3;
            font-family: "JetBrains Mono", monospace;
        }
        .navbar {
            flex-wrap: nowrap;
            width: 100%;
            height: 4.5rem;
            background-color: #F7BDCB !important;
            justify-content: start;
        }
        a.navbar-brand {
            margin-left: 10%;
            margin-top: 0.5rem;
            text-align: center;
            font-family: "Jockey One", sans-serif !important;
            font-size: 2.5rem;
            color: #5754A3 !important;
        }
        .form-inline .form-control {
            margin-top: 0.5rem;
            border-radius: 2rem 0 0 2rem !important;
        }
        .search-btn {
            margin-top: 0.5rem;
            border-radius: 0 2rem 2rem 0!important;
        }
        .nav-btn {
            margin-left: 2%;
            margin-top: 1.5rem;
        }
        p {
            font-size: 0.8rem;
        }
        .form-inline {
            width: 40%;
        }
        .icon-img {
            margin-left: 10px;
        }
        .menu {
            justify-content: space-around;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;            margin-bottom: 2%;
        }
        .menu, .slider, .slider-left, .slider-right {
            display: flex;
            justify-content: center;
        }
        .slider-left, .slider-right {
            display: flex;
            flex-direction: column;
        }
        .slider {
            display: flex;
            justify-content: space-between;
            
        }
        section {
            justify-content: center;
            border: solid 2px #F7BDCB;
            margin: 5rem auto;
            align-items: center;
            width: 40rem;
            height: 25rem; 
        }
        .login-form {
            width: 50%;
            height: 50%;
            margin: auto;
            flex-direction: column;
            display: flex;
        }
        .logo h1 {
            font-family: "Jockey One", sans-serif !important;
            color: #5754A3;
        }
        .logo {
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-group {
            margin: 3px;
        }
        .form-check { 
            padding-left: 0 !important;
        }
        .form-check a {
            font-size: small;
            color: #5754A3;
            text-decoration: none;
        }
        .sm {
            background-color: #E37596;
            border: #E37596;
        }
        .sm:hover {
            background-color: #F7BDCB;
            color: #5754A3;
        }
        .customer-management-2 {
            background: #FFFFFF;
            display: flex;
            padding: 0 3px 98px 0;
            width: 1440px;
            box-sizing: border-box;
          }
        .arrow-down-sign-to-navigate-8 {
            background: url('../phone/assets/images/arrow-down.png') 50% / cover no-repeat;
            position: absolute;
            right: 147px;
            bottom: 125px;
            width: 20px;
            height: 20px;
        }
        .container-6 {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 1440px;
            height: fit-content;
            box-sizing: border-box;
        }
        .avt {
            border-radius: 150px;
            background: url('../phone/assets/images/ellipse_7.png') 50% / cover no-repeat;
            margin-bottom: 39.5px;
            align-self: center;
            width: 200px;
            height: 200px;
        }
        .ten {
            margin: 0 16.4px 32.5px 0;
            display: inline-block;
            align-self: center;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 700;
            font-size: 36px;
            color: #000000;
        }
        .container-3 {
            border-radius: 20px;
            border: 1px solid #E37596;
            position: relative;
            display: flex;
            padding: 20px; /* Giảm padding */
            margin: 0 auto; /* Căn giữa container */
            width: 60%; /* Chiều rộng cụ thể */
            max-width: 1400px; /* Giới hạn chiều rộng tối đa */
            box-sizing: border-box;
        }
        
        .container-3::before {
            content: '';
            border-left: 1px solid #E37596; /* Tạo đường viền dọc */
            height: 100%; /* Chiều cao bằng chiều cao của container */
            position: absolute;
            top: 0;
            left: 50%; /* Đặt ở giữa container */
            transform: translateX(-50%); /* Dịch chuyển đường viền về trung tâm */
        }
        .left-content,
        .right-content {
            flex: 1; /* Chia không gian ngang đều cho hai phần */
        }

        .vertical-line {
            width: 1px;
            height: 100%;
            background-color: #E37596;
            margin: 0 20px; /* Khoảng cách giữa đường line và nội dung */
        }
        .hoten {
            margin: 0 1px 26.1px 1px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 700;
            font-size: 20px;
            color: #8F8686;
        }
        .line-4 {
            background: #E37596;
            margin: 0 0 55.9px 1px;
            width: 1130px;
            height: 1px;
        }
        .sodienthoai {
            margin: 0 0px 26.1px 0px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 700;
            font-size: 20px;
            color: #8F8686;
          }
          .line-7 {
            background: #E37596;
            margin: 0 1px 55.9px 0;
            width: 1130px;
            height: 1px;
          }
          .diachi {
            margin: 0 0px;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 700;
            font-size: 20px;
            color: #8F8686;
          }
          .container-2 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 1250px;
            box-sizing: border-box;
          }
          .lsbh {
            margin: 0 24px 59.5px 100px;
              display: inline-block;
              width: 991px;
              overflow-wrap: break-word;
              font-family: 'JetBrains Mono';
              font-weight: 700;
              left: 500px;
              font-size: 25px;
              color: #000000;
          }

          .btn-next-2 {
            width: 225px;
            height: 66px;
            border-radius: 15px;
            border: 1px solid #FEB5CA;
            background: #E37596;
            font-family: 'JetBrains Mono';
            font-weight: 700;
            font-size: 30px;
            color: #FFF3F3;
            position: absolute;
            top: 730px;
            bottom: 10px;
            left: 1104px;
            text-decoration: none;
            text-align: center;
            line-height: 66px;
          }
          .container-1 {
            position: relative;
            display: flex;
            flex-direction: row;
            box-sizing: border-box;
            width: 70%; /* Đặt chiều rộng cụ thể, ví dụ 70% */
            max-width: 1000px; /* Giới hạn chiều rộng tối đa */
            margin: 0 auto; /* Căn giữa container */
            border: 1px solid #E37596; /* Thêm viền để dễ nhìn */
            padding: 20px; /* Thêm khoảng cách bên trong container */
        }
        
          .container-4 {
            border-radius: 10px;
            border: 1px solid #E37596;
            position: relative;
            flex-direction: column;
            padding: 31.5px 0 71.5px 37px;
            box-sizing: border-box;
        }
        
        .container-4 > div {
            width: 100%; /* Đảm bảo các phần tử con chiếm toàn bộ chiều rộng */
            margin-bottom: 10px; /* Tùy chọn: Thêm khoảng cách giữa các phần tử con */
        }
        
          .xemchitiet {
            position: absolute;
            right: 104.8px;
            bottom: 13px;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #5754A3;
          }
          .madon {
            margin-bottom: 5px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .mavach {
            margin-bottom: 5px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .tongtien {
            margin-bottom: 5px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .tiendua {
            margin-bottom: 5px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .tienthua {
            margin-bottom: 5px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .ngaymua {
            margin-bottom: 5px;
            display: inline-block;
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .soluong {
            align-self: flex-start;
            overflow-wrap: break-word;
            font-family: 'JetBrains Mono';
            font-weight: 400;
            font-size: 20px;
            color: #000000;
          }
          .arrow-down-sign-to-navigate-9 {
            background: url('../phone/assets/images/arrow-down.png') 50% / cover no-repeat;
            position: absolute;
            right: 64px;
            bottom: 27px;
            width: 20px;
            height: 20px;
          }
    </style>
  </head>
  <body>

<div class="customer-management-2">
      <div class="arrow-down-sign-to-navigate-8">
      </div>
      <div class="container-6">
        <div class="avt">
        </div>

        <?php
        // session_start();
        $username = $_SESSION['username'];
        $query = "SELECT NHANVIEN.hoten as t, COUNT(Hoadon.mahd) AS tong_sodonhang, SUM(Hoadon.tongtien) AS tongtien
        FROM Hoadon
        INNER JOIN Nhanvien ON Hoadon.manhanvien = Nhanvien.manhanvien
        INNER JOIN Taikhoan ON Nhanvien.tentk = Taikhoan.tentk
        WHERE Taikhoan.tentk = 'username'";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) :
          $row = $result->fetch_assoc()
        ?>

        <div class="hoten">
        <?php echo $row["t"]; ?>
        </div>
        <div class="container-3">
          
          <div class="sodienthoai">
          Số đơn hàng <?php echo $row["tong_sodonhang"]; ?>
          </div>
          <div class="line-7">
          </div>
          <span class="diachi">
          Tổng tiền bán được <?php echo $row["tongtien"]; ?>
          </span>
        </div>
        <?php endif; ?>
        <div class="container-2">
          <div class="lsbh">
          Lịch sử mua hàng
          </div>
        </div>

        <?php
        
        $query1 = "SELECT Hoadon.* FROM Hoadon JOIN Nhanvien ON Hoadon.manhanvien = Nhanvien.manhanvien WHERE Nhanvien.tentk = 'user2';";
        $result1 = $mysqli->query($query1);
        ?>

        <?php if ($result1->num_rows > 0) : ?>
            <!-- Lặp qua mỗi dòng dữ liệu và đổ vào biến tương ứng -->
            <?php while ($row = $result1->fetch_assoc()) : ?>
                <div class="container-1">
                    <div class="container-4">
                        <div class="madon">
                            Mã hóa đơn: <?php echo $row["mahd"]; ?>
                        </div>
                        <div class="mavach">
                            Mã vạch: null
                        </div>
                        <div class="tongtien">
                            Tổng tiền: <?php echo $row["tongtien"]; ?>
                        </div>
                        <div class="tiendua">
                            Số tiền khách hàng đưa: <?php echo $row["tienkhdua"]; ?>
                        </div>
                        <div class="tienthua">
                            Số tiền thừa trả lại: <?php echo $row["tienthua"]; ?>
                        </div>
                        <div class="ngaymua">
                            Ngày mua: <?php echo $row["ngaylapdon"]; ?>
                        </div>
                        <span class="soluong">
                            Số lượng sản phẩm: <?php echo $row["soluongsp"]; ?>
                        </span>
                    </div>
                    <a href="#" class="xemchitiet">
                        Xem chi tiết
                    </a>
                    <div class="arrow-down-sign-to-navigate-9">
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Không có dữ liệu.</p>
        <?php endif; ?>
        <?php $mysqli->close(); ?>
      </div>
    </div>
<body>
