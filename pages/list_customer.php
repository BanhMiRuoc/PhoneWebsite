<div class="content">
    <h1 style="margin-left: 5rem;">CUSTOMER</h1>
    <div class="container">
        <div class="feature">
        </div>
        <div class="container-table">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM KHACHHANG";
                        $stmt = $mysqli->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                <td>'.$row['makhachhang'].'</td>
                                <td>'.$row['hoten'].'</td>
                                <td>'.$row['diachi'].'</td>
                                <td>'.$row['sodienthoai'].'</td>
                                </tr>';
                            }
                        } else {
                            echo "<script>alert('Không có khách hàng nào trong hệ thống');</script>";
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
