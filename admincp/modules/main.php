<div class="main">
    <div class="main-content">
        <?php
            if (isset($_GET['admin'])) {
                $temp = $_GET['admin'];
            }
            else {
                $temp = '';
            }
            if ($temp == 'cart') {
                include("modules/cart.php");
            }
            elseif ($temp == 'login') {
                include("modules/login.php");
            }
            else {
                include("modules/main/index.php");
            }
        ?>
    </div>
</div>