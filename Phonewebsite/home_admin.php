<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title web -->
    <title>MeoPhones</title>
    <!-- add font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Jockey+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
    <!-- add bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
    <!-- Add logo -->
    <link rel="icon" type="image/x-icon" href="logo.png">
    <!-- Add css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home_admin.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- add js -->
    <script src="js/home_admin.js"></script>
</head>
<body>
    <div>
        <div class="header"><?php include("pages/header.php"); ?></div>
        <div class="container-home">
            <div class="navbar"><?php include("pages/navbar.php") ?></div>
            <div class="content">
                <h1>PRODUCT</h1>
                <div class="container">
                    <div class="feature">
                        <!-- filter -->
                        <div class="btn btn-filter">
                            <select class="filter-dropdown" id="filterCategory">
                                <option value="Filter">Filter</option>
                                <option value="Iphone">Iphone</option>
                                <option value="samsung">Samsung</option>
                                <option value="Oppo">Oppo</option>
                                <option value="Xiaomi">Xiaomi</option>
                                <option value="Nokia">Nokia</option>
                                <option value="Vivo">Vivo</option>
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
            </div>
        </div>
        <div class="footer"><?php include("pages/footer.php"); ?></div>
</body>
</html>