<div class="main">
    <div class="main-content">
        <?php
            if (isset($_GET['user'])) {
                $temp = $_GET['user'];
            }
            else {
                $temp = '';
            }
            if ($temp == 'cart') {
                include("pages/cart.php");
            }
            elseif ($temp == 'login') {
                include("pages/login.php");
            }
            else {
                include("pages/main/main_no_register.php");
            }
        ?>
    </div>
</div>