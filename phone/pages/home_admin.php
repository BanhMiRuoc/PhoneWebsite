<div class="content">
<h1 style="margin-left: 5rem;">PRODUCT</h1>
<div class="container">
    <div class="feature">
        <!-- filter -->
        <div class="btn btn-filter">
            <select class="filter-dropdown" id="filterCategory">
                <?php
                $query = "SELECT DISTINCT phanloai FROM SANPHAM";
                $result = $mysqli->query($query);

                if ($result->num_rows > 0) :
                    while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?php echo $row["phanloai"]; ?>"><?php echo $row["phanloai"]; ?></option>
                </div>
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
            
            <button type="submit">Delete product</button>
        </div>
        <!-- edit product -->
        <div class="btn btn-edit">
            <button type="submit">Edit product</button>
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
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <tr>
                    <td><input type="checkbox" class="rowCheckbox"></td>
                    <td>Name</td>  <td>Origin Price</td>  <td>Price</td>  <td>Iphone</td>  <td>Inventory</td>  <td>Date</td>  <td><button>Edit</button></td>  </tr>
                <?php } ?>
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
        </script>
    </div>
</div>