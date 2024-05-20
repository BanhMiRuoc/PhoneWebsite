<div class="content">
    <h1 style="margin-left: 5rem;">STAFF</h1>
    <div class="container">
        <div class="feature">
            <div class="btn btn-add">
                <button type="submit">Add staff</button>
            </div>

            <div class="btn btn-del">
                <button type="button" id="deleteStaffBtn">Delete staff</button>
            </div>
        </div>
        <div class="container-table">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>State</th>
                    <!-- <th><button>View detail</button></th> -->
                </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM NHANVIEN WHERE CHUCVU !='admin'";
                        $stmt = $mysqli->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                <td><input type="checkbox" class="rowCheckbox" value="'.$row['manhanvien'].'"></td>
                                <td>'.$row['manhanvien'].'</td>
                                <td>'.$row['hoten'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['gioitinh'].'</td>
                                <td>'.$row['sodienthoai'].'</td>
                                <td>'.$row['trangthai'].'</td>
                                </tr>';
                            }
                        } else {
                            echo "<script>alert('Không có nhân viên nào trong hệ thống');</script>";
                        }
                        //<td><button class="edit-btn" data-id="'.$row['manhanvien'].'">View Detail</button></td>
                    ?>
                </tbody>
            </table>
            <script>
                const selectAll = document.getElementById('selectAll');
                const rowCheckboxes = document.querySelectorAll('.rowCheckbox');

                selectAll.addEventListener('change', (event) => {
                    const isChecked = event.target.checked;
                    rowCheckboxes.forEach(checkbox => checkbox.checked = isChecked);
                });

                rowCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', () => {
                        const allChecked = [...rowCheckboxes].every(box => box.checked);
                        selectAll.checked = allChecked;
                    });
                });

                // document.querySelectorAll('.edit-btn').forEach(button => {
                //     button.addEventListener('click', (event) => {
                //         const productId = event.target.getAttribute('data-id');
                //         window.location.href = `index.php?quanly=detailproduct&id=${productId}`;
                //     });
                // });

                document.getElementById('deleteStaffBtn').addEventListener('click', () => {
                    const selectedProducts = [...document.querySelectorAll('.rowCheckbox:checked')].map(cb => cb.value);
                    if (selectedProducts.length > 0) {
                        if (confirm('Are you sure you want to delete the selected staff?')) {
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = 'modules/sanpham/deleteStaff.php';
                            selectedProducts.forEach(id => {
                                const input = document.createElement('input');
                                input.type = 'hidden';
                                input.name = 'productIds[]';
                                input.value = id;
                                form.appendChild(input);
                            });
                            document.body.appendChild(form);
                            form.submit();
                        }
                    } else {
                        alert('No staff selected.');
                    }
                });

                document.querySelector('.btn-add button').addEventListener('click', () => {
                    window.location.href = 'index.php?quanly=signup'; // Thay 'add_product.php' bằng đường dẫn tới trang thêm sản phẩm của bạn
                });
            </script>
        </div>
    </div>
</div>
