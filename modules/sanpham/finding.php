<?php
    if (isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM sanpham WHERE sanpham.tensp LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h3>Từ khóa tìm kiếm: <?php $_POST['tukhoa'] ?></h3>
<ul class="product-list">
    <?php 
        while($row = mysqli_fetch_array($query_pro)) {
    ?>
    <li>
        <a href=""></a>
    </li>
    <?php       
        }
    ?>
</ul>