<div class="customer-management-2">
      <div class="arrow-down-sign-to-navigate-8">
      </div>
      <div class="container-6">
        <div class="avt">
        </div>

        <?php
        // session_start();
        $tentk = $_SESSION['username'];
        $query = "SELECT * FROM NHANVIEN WHERE TENTK = '$tentk'";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) :
          $row = $result->fetch_assoc()
        ?>

        <div class="ten">
        <?php echo $row["hoten"]; ?>
        </div>
        <div class="container-3">
          <div class="hoten">
          Họ tên: <?php echo $row["hoten"]; ?>
          </div>
          <div class="line-4">
          </div>
          <div class="sodienthoai">
          Số điện thoại: <?php echo $row["sodienthoai"]; ?>
          </div>
          <div class="line-7">
          </div>
          <span class="diachi">
          Địa chỉ: <?php echo $row["diachi"]; ?>
          </span>
        </div>
        <?php endif; ?>
        <div class="container-2">
          <div class="lsmh">
          Lịch sử mua hàng
          </div>
          <a class="btn-next-2" href="#">
            Thêm
          </a>
        </div>

        <?php
        $query1 = "SELECT * FROM HOADON"; //CẦN THÊM ĐIỀU KIỆN LẤY HÓA LÀ MAKH
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