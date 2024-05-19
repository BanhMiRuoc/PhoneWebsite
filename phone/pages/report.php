<div class="report container">
    <div class="row container">
      <div class="address container">
        <p class="login-address-content text-uppercase fw-bold">
          HOME
          <img src="assets/images/next.png" alt="icon next" class="icon-next mb-1">
          Report
        </p>
      </div>
    </div>
    <?php
    $query = "SELECT 
        Hoadon.ngaylapdon,
        SUM(Hoadon.tongtien) AS tongtien_nhan_duoc,
        COUNT(Hoadon.mahd) AS so_luong_don_hang,
        SUM(Hoadon.soluongsp) AS so_luong_ban_ra
    FROM 
        Hoadon
    GROUP BY 
        Hoadon.ngaylapdon
    ORDER BY 
        Hoadon.ngaylapdon";

    $result = $mysqli->query($query);

    // Kiểm tra kết quả và hiển thị dữ liệu
    // if ($result->num_rows > 0) {
    // // Duyệt qua từng hàng kết quả
    // while ($row = $result->fetch_assoc()) {
    // // Hiển thị thông tin từng hàng
    // echo "<div class='row container'>";
    // echo "<div class='col d-flex justify-content-center'><div class='row p-3'>" . $row["ngaylapdon"] . "</div></div>";
    // echo "<div class='col d-flex justify-content-center'><div class='row p-3'>" . $row["tongtien_nhan_duoc"] . "$</div></div>";
    // echo "<div class='col d-flex justify-content-center'><div class='row p-3'>" . $row["so_luong_don_hang"] . "</div></div>";
    // echo "<div class='col d-flex justify-content-center'><div class='row p-3'>" . $row["so_luong_ban_ra"] . "</div></div>";
    // echo "</div>";
    // }
    // } else {
    // echo "Không có kết quả.";
    // }
    ?>

    <!-- filter -->
    <div class="btn btn-filter">
        <select class="filter-dropdown" id="filterReport" onchange="filterReport()">
            <option value="Ngay">Chọn ngày</option>
            <?php
            $query = "SELECT DISTINCT ngaylapdon FROM HOADON";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) :
                while ($row = $result->fetch_assoc()) : ?>
                    <option value="<?php echo $row["ngaylapdon"]; ?>"><?php echo $row["ngaylapdon"]; ?></option>
            <?php endwhile; ?>
            <?php else : ?>
                <p>Không có dữ liệu.</p>
            <?php endif; ?>
        </select>
    </div>

    <div class="view">
      <div class="row container">
        <div class="col d-flex justify-content-center">
          <div class="row p-3">Ngày</div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="row p-3">Tổng tiền đã nhận</div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="row p-3">Số lượng đơn hàng</div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="row p-3">Số lượng bán ra</div>
        </div>
      </div> 
    <?php
    if (isset($_GET['ngaylapdon'])) {
        $nld = $_GET['ngaylapdon'];
        $query = "SELECT 
            Hoadon.ngaylapdon,
            SUM(Hoadon.tongtien) AS tongtien_nhan_duoc,
            COUNT(Hoadon.mahd) AS so_luong_don_hang,
            SUM(Hoadon.soluongsp) AS so_luong_ban_ra
        FROM 
            Hoadon
        WHERE ngaylapdon = '$nld'
        GROUP BY 
            Hoadon.ngaylapdon
        ORDER BY 
            Hoadon.ngaylapdon";

        $result = $mysqli->query($query);

        // Kiểm tra kết quả và hiển thị dữ liệu
        if ($result->num_rows > 0) {
        // Duyệt qua từng hàng kết quả
        while ($row = $result->fetch_assoc()) {
        // Hiển thị thông tin từng hàng
        echo '<div class="row container">
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['ngaylapdon'].'</div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['tongtien_nhan_duoc'].'$</div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['so_luong_don_hang'].'</div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['so_luong_ban_ra'].'</div>
        </div>
    </div>';
        }
        } else {
        echo "Không có kết quả.";
        }
    }
    else {
        $query = "SELECT 
            Hoadon.ngaylapdon,
            SUM(Hoadon.tongtien) AS tongtien_nhan_duoc,
            COUNT(Hoadon.mahd) AS so_luong_don_hang,
            SUM(Hoadon.soluongsp) AS so_luong_ban_ra
        FROM 
            Hoadon
        GROUP BY 
            Hoadon.ngaylapdon
        ORDER BY 
            Hoadon.ngaylapdon";

        $result = $mysqli->query($query);

        // Kiểm tra kết quả và hiển thị dữ liệu
        if ($result->num_rows > 0) {
        // Duyệt qua từng hàng kết quả
        while ($row = $result->fetch_assoc()) {
        // Hiển thị thông tin từng hàng
        echo '<div class="row container">
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['ngaylapdon'].'</div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['tongtien_nhan_duoc'].'$</div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['so_luong_don_hang'].'</div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="row p-3">'.$row['so_luong_ban_ra'].'</div>
        </div>
    </div>';
        }
    }
    }
?>
      </div> 
    </div>
    <script>
        function filterReport() {
            const nld = document.getElementById('filterReport').value;
            window.location.href = `?quanly=report&ngaylapdon=${nld}`;
        }
    </script>
  </div>