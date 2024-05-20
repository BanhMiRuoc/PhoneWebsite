<div class="content">
    <div class="container">
        <div class="address container">
            <div class="p-2">
                <p class="login-address-content text-uppercase fw-bold">
                    HOME
                    <img src="assets/images/next.png" alt="icon next" class="icon-next mb-1">
                    Detail
                </p>
            </div>
        </div>
        <!-- body main -->
        <div class="detail-product container">
            <?php
            if (isset($_GET['id'])) {
                $category = $_GET['id'];
                $query = "SELECT * FROM SANPHAM WHERE mavach = ?";
                $stmt = $mysqli->prepare($query);
                $stmt->bind_param('s', $category);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
            }
            ?>
            <h1 class="product-name"><?php echo $row['tensp']?></h1>
            <div class="row">
                <div class="col">
                    <?php
                    $imageData = base64_encode($row['anhsp']);
                    $src = 'data:image/jpeg;base64,' . $imageData;
                    ?>
                    <div class="product-img d-flex justify-content-center mt-3">
                        <img src="<?php echo $src ?>" alt="" class="product-img">
                    </div>
                </div>
                <div class="col">
                    <div class="row product-content">
                        <div class="col mt-4">
                            <div class="row">
                                <p class="title-content fw-bold">Giá gốc:</p>
                                <p class="content"><?php echo $row['giagoc'];?>VNĐ</p>
                            </div>
                            <div class="row">
                                <p class="title-content fw-bold">Giá bán:</p>
                                <p class="content"><?php echo $row['giaban'];?>VNĐ</p>
                            </div>
                            <div class="row">
                                <p class="title-content fw-bold">Phân loại hàng hóa:</p>
                                <p class="content"><?php echo $row['phanloai']?></p>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <div class="row">
                                <p class="title-content fw-bold">Đã bán:</p>
                                <p class="content"><?php echo $row['daban']?></p>
                            </div>
                            <div class="row">
                                <p class="title-content fw-bold">Tồn kho</p>
                                <p class="content"><?php echo $row['tonkho']?></p>
                            </div>
                            <div class="row">
                                <p class="title-content fw-bold">Ngày sản xuất</p>
                                <p class="content"><?php echo $row['ngaysanxuat']?></p>
                            </div>
                            <div class="btn-content my-5">
                                <button class="btn fw-bold">
                                    <p class="mt-2">Sửa thông tin</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Product Modal -->
        <div id="editProductModal" style="display: none;">
            <form id="editProductForm" method="POST" action="modules/sanpham/updateProduct.php" enctype="multipart/form-data">
                <h2>Edit Product</h2>
                <input type="hidden" id="editProductId" name="mavach" value="<?php echo $row['mavach']; ?>">
                <label for="editTensp">Product Name:</label>
                <input type="text" id="editTensp" name="tensp" value="<?php echo $row['tensp']; ?>" required><br>
                <label for="editGiagoc">Origin Price:</label>
                <input type="number" id="editGiagoc" name="giagoc" value="<?php echo $row['giagoc']; ?>" required><br>
                <label for="editGiaban">Price:</label>
                <input type="number" id="editGiaban" name="giaban" value="<?php echo $row['giaban']; ?>" required><br>
                <label for="editPhanloai">Category:</label>
                <input type="text" id="editPhanloai" name="phanloai" value="<?php echo $row['phanloai']; ?>" required><br>
                <label for="editTonkho">Inventory:</label>
                <input type="number" id="editTonkho" name="tonkho" value="<?php echo $row['tonkho']; ?>" required><br>
                <label for="editNgaysanxuat">Date:</label>
                <input type="date" id="editNgaysanxuat" name="ngaysanxuat" value="<?php echo $row['ngaysanxuat']; ?>" required><br>
                <label for="editAnhsp">Image:</label>
                <input type="file" id="editAnhsp" name="anhsp"><br>
                <button type="submit">Save Changes</button>
                <button type="button" onclick="toggleEditProductModal()">Cancel</button>
            </form>
        </div>

        <script>
            function toggleEditProductModal() {
                const modal = document.getElementById('editProductModal');
                if (modal.style.display === 'none' || modal.style.display === '') {
                    modal.style.display = 'block';
                } else {
                    modal.style.display = 'none';
                }
            }

            document.querySelector('.btn-content .btn').addEventListener('click', () => {
                toggleEditProductModal();
            });
        </script>
    </div>
</div>
