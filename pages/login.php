<section class="login">
    <div>
        <?php
            if (isset($_GET['user']) && isset($_GET['action'])) {
                $user = $_GET['user'];
                $action = $_GET['action'];
            }
            else {
                $user = '';
                $action = '';
            }
            if ($user == 'login' && $action == 'forgot') {
                include("pages/forgot-password/forgot_password.php");
            }
            else {
                include("pages/forgot-password/index.php");
            }
        ?>
    </div>
</section> 