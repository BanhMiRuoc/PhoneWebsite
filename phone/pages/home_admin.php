<div class="content">
    <h1 style="margin-left: 5rem;">PRODUCT</h1>
    <div class="container">
        <div class="feature">
            <!-- filter -->
            <div class="btn btn-filter">
                <select class="filter-dropdown" id="filterCategory" onchange="filterProducts()">
                    <option value="Filter">Filter</option>
                    <?php
                    $query = "SELECT DISTINCT phanloai FROM SANPHAM";
                    $result = $mysqli->query($query);

                    if ($result->num_rows > 0) :
                        while ($row = $result->fetch_assoc()) : ?>
                            <option value="<?php echo $row["phanloai"]; ?>"><?php echo $row["phanloai"]; ?></option>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <p>Không có dữ liệu.</p>
                    <?php endif; ?>
                </select>
            </div>
            <!-- add product -->
            <div class="btn btn-add">
                <button type="submit">Add product</button>
            </div>
            <!-- delete product -->
            <div class="btn btn-del">
                <button type="button" id="deleteProductBtn">Delete product</button>
            </div>
        </div>
        <div class="container-table">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>Name</th>
                    <th>Origin price</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Inventory</th>
                    <th>Date</th>
                    <th><button>More</button></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['category'])) {
                        $category = $_GET['category'];
                        $query = "SELECT * FROM SANPHAM WHERE phanloai = ?";
                        $stmt = $mysqli->prepare($query);
                        $stmt->bind_param('s', $category);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                <td><input type="checkbox" class="rowCheckbox" value="'.$row['mavach'].'"></td>
                                <td>'.$row['tensp'].'</td>
                                <td>'.$row['giagoc'].'</td>
                                <td>'.$row['giaban'].'</td>
                                <td>'.$row['phanloai'].'</td>
                                <td>'.$row['tonkho'].'</td>
                                <td>'.$row['ngaysanxuat'].'</td>
                                <td><button class="edit-btn" data-id="'.$row['mavach'].'">View Detail</button></td>
                                </tr>';
                            }
                        } else {
                            echo "<p>Không có sản phẩm nào trong phân loại này.</p>";
                        }
                    }
                    else{
                        $query = "SELECT * FROM SANPHAM";
                        $stmt = $mysqli->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                <td><input type="checkbox" class="rowCheckbox" value="'.$row['mavach'].'"></td>
                                <td>'.$row['tensp'].'</td>
                                <td>'.$row['giagoc'].'</td>
                                <td>'.$row['giaban'].'</td>
                                <td>'.$row['phanloai'].'</td>
                                <td>'.$row['tonkho'].'</td>
                                <td>'.$row['ngaysanxuat'].'</td>
                                <td><button class="edit-btn" data-id="'.$row['mavach'].'">View Detail</button></td>
                                </tr>';
                            }
                        } else {
                            echo "<p>Không có sản phẩm nào trong phân loại này.</p>";
                        }
                    }
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

                document.querySelectorAll('.edit-btn').forEach(button => {
                    button.addEventListener('click', (event) => {
                        const productId = event.target.getAttribute('data-id');
                        window.location.href = `index.php?quanly=detailproduct&id=${productId}`;
                    });
                });

                document.getElementById('deleteProductBtn').addEventListener('click', () => {
                    const selectedProducts = [...document.querySelectorAll('.rowCheckbox:checked')].map(cb => cb.value);
                    if (selectedProducts.length > 0) {
                        if (confirm('Are you sure you want to delete the selected products?')) {
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = 'modules/sanpham/deleteProduct.php';
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
                        alert('No products selected.');
                    }
                });

                function filterProducts() {
                    const category = document.getElementById('filterCategory').value;
                    window.location.href = `?category=${category}`;
                }

                document.querySelector('.btn-add button').addEventListener('click', () => {
                    window.location.href = 'index.php?quanly=addproduct'; // Thay 'add_product.php' bằng đường dẫn tới trang thêm sản phẩm của bạn
                });
            </script>
        </div>
    </div>
</div>
