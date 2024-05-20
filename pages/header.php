<header>
    <nav class="navbar navbar-light bg-light justify-content-none">
        <a href="Home" class="navbar-brand">
            <img src="assets/images/mobile_11.png" width="55" height="55" class="d-inline-block align-top">
            MeoPhones
        </a>
        <form class="form-inline">
            <div class="input-group">
                <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
                <button class="btn search-btn btn-outline-secondary border border-start-0 bg-white border-pill ms-n5" type="button">
                    <img src="assets/images/magnifying_glass.png"  width="40" height="40" alt="">
                </button>
            </div>
        </form>
        <!-- <button class="btn nav-btn">
            <div class="navbar-brand d-flex flex-column">
                <img src="assets/images/add-to-card.png" width="40" height="40" alt="Image" class="icon-img">
                <p>Giỏ hàng</p>
            </div>
        </button> -->
        <?php
            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if(isset($_GET['quanly'])) {
                $loggedIn = $_GET['quanly'];
            }
            else {
                $loggedIn = '';
            }
            // Nếu người dùng chưa đăng nhập
            if ($loggedIn == '' || $loggedIn == 'login' || $loggedIn == 'activate') {
                echo '<button class="btn nav-btn" id="loginBtn">
                        <div class="navbar-brand d-flex flex-column">
                            <img src="assets/images/user_interface.png" width="40" height="40" alt="Image" class="icon-img">
                            <p>Đăng nhập</p>
                        </div>
                    </button>';
            } else {

                // Nếu người dùng đã đăng nhập
                if($_SESSION['username'] != $_SESSION['password']){
                    echo '<button class="btn nav-btn">
                        <div class="navbar-brand d-flex flex-column">
                            <img src="assets/images/add-to-card.png" width="40" height="40" alt="Image" class="icon-img">
                            <p>Giỏ hàng</p>
                        </div>
                    </button>
                    <button class="btn nav-btn">
                    <div class="navbar-brand d-flex flex-column">
                        <img src="assets/images/user_interface.png" width="40" height="40" alt="Image" class="icon-img">
                        <p>Tài khoản</p>
                    </div>
                    </button>';
                }
                else {
                    echo '<button class="btn nav-btn">
                        <div class="navbar-brand d-flex flex-column">
                            <img src="assets/images/user_interface.png" width="40" height="40" alt="Image" class="icon-img">
                            <p>Đăng xuất</p>
                        </div>
                    </button>';
                }
            }
        ?>
    </nav>
</header>

