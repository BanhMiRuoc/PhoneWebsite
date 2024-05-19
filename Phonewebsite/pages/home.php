<<<<<<<< HEAD:Phonewebsite/home.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Jockey+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="style.css">
    <!-- link script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- link bootstrap ratings -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
    <link href="bootstrap-rating.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap-rating.js"></script>

    <title>MeoPhones</title>
    <style>
      /*css header*/
      body {
        color: #5754A3 !important;
        font-family: "JetBrains Mono", monospace;
      }
      .navbar {
        flex-wrap: nowrap;
        width: 100%;
        height: 4.5rem;
        background-color: #F7BDCB !important;
        justify-content: start;
      }
      a.navbar-brand {
        margin-left: 10%;
        margin-top: 0.5rem;
        text-align: center;
        font-family: "Jockey One", sans-serif !important;
        font-size: 2.5rem;
        color: #5754A3 !important;
      }
      .form-control {
        margin-left: 5%;
        margin-top: 0.5rem;
        border-radius: 2rem 0 0 2rem !important;
      }
      .search-btn {
        margin-top: 0.5rem;
        border-radius: 0 2rem 2rem 0!important;
      }
      .nav-btn {
        margin-left: 2%;
        margin-top: 1.5rem;
      }
      p {
        font-size: 0.8rem;
      }
      .form-inline {
        width: 40%;
      }
      .icon-img {
        margin-left: 10px;
      }
      /*css body*/
      .menu {
        justify-content: space-around;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;            margin-bottom: 2%;
      }
      .menu, .slider, .slider-left, .slider-right {
        display: flex;
        justify-content: center;
      }
      .slider-left, .slider-right {
        display: flex;
        flex-direction: column;
      }
      .slider {
        display: flex;
        justify-content: space-between;
      }
      .card-body {
        cursor: pointer;
        padding: 0 0 0 1em;
      }
      .rating {
        display: flex;
        flex-direction: row-reverse;
      }
      .card-body p {
        margin-block-start: 0;
        margin-block-end: 0;
      }
      .rating>input {
          display: none
      }
      
      .rating>label {
          position: relative;
        width: 1em;
        font-size: 30px;
        font-weight: 300;
        color: #FFD600;
        cursor: pointer;
      }
      .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
      }
      
      .rating>label:hover:before,
      .rating>label:hover~label:before {
        opacity: 1 !important
      }
      
      .rating>input:checked~label:before {
        opacity: 1
      }
      
      .rating:hover>input:checked~label:before {
        opacity: 0.4
      }
      .test  {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        align-items: center;
      }
      .add-cart {
        margin-right: 1.7rem;
        border: none;
        background-color: white;
      }
      #product-container {
        display: flex;
        justify-content: center;
      }
    </style>
</head>
<body>
  <!-- header include navigation, menu product and slider-->
    <header>
      <!-- navbar -->
      <nav class="navbar navbar-light bg-light jusify-content-none">
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
          <button class="btn nav-btn">
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
          </button>
      </nav>
      <!-- menu product -->
      <div class="menu">
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Apple
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Oppo
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                SamSung
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Xiaomi
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nokia
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Vivo
========
<header>

      <div class="menu">
            <?php
            $query = "SELECT DISTINCT phanloai FROM SANPHAM";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) :
                while ($row = $result->fetch_assoc()) : ?>
          <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $row["phanloai"]; ?>
>>>>>>>> origin/ThongLinh:Phonewebsite/pages/home.php
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
<<<<<<<< HEAD:Phonewebsite/home.html
      </div>
      <!-- slider -->
      <div id="banner" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/banner1.jpg"  alt="">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/boulderbannerupdated.png"  alt="">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/banner3.png" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
    </header>
    <!-- popular product -->
    <section class="list-phone m-4">
      <h2>ĐIỆN THOẠI NỔI BẬT</h2>
      <div id="product-container">
        <!-- Các sản phẩm sẽ được thêm vào đây -->
      </div> 
    </section>
    <!-- suggest product -->
    <!-- slide card include 9 product -->
========
                <?php endwhile; ?>
            <?php else : ?>
                <p>Không có dữ liệu.</p>
            <?php endif; ?>
      </div>

      <div class="slider">
        <div class="slider-left">
            <img src="assets/images/xiaomi_13_tthumb_yt_1020_x_5701.jpeg" width="312" height="170" alt="">
            <img src="assets/images/nokia_g_11_plus_thumb_video_1020_x_5701.jpeg" width="312" height="170" alt="">
        </div>
        <div id="main-slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#main-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#main-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#main-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/samsung_zfoldf_mobi_78412001.png"  width="915" height="350" alt="">
              </div>
              <div class="carousel-item">
                <img src="assets/images/oppo_f_1711.jpeg"  width="915" height="350" alt="">
              </div>
              <div class="carousel-item">
                <img src="assets/images/vi_vn_iphone_15_pro_max_41020_x_5701.jpeg"   width="915" height="350" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#main-slider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#main-slider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="slider-right">
            <img src="assets/images/vivo_y_36_mobi_23012001.png"  width="310" height="110" alt="">
            <img src="assets/images/realme.jpeg"  width="310" height="150" alt="">
            <img src="assets/images/realme_c_30_s_3_gb_64_gb_6381699460681872151.jpeg"  width="310" height="80" alt="">
        </div>
      </div>
    </header>

    <section class="list-phone m-4">
        <h2>ĐIỆN THOẠI NỔI BẬT</h2>
        <div class="container">
            <div id="product-container" class="row">

            </div>
        </div>
    </section>

>>>>>>>> origin/ThongLinh:Phonewebsite/pages/home.php
    <section class="suggestion">
      <h2>GỢI Ý SẢN PHẨM</h2>
      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper container-sm d-flex   justify-content-around">
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
              <<div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
              <div class="card" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/iphone-15-pro-max-blue-thumbnew-600x600.jpg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">102.291.281đ</p> 
                        <div class="rating"> 
                          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                        </div> 
                      </div> 
                      <button class="add-cart"> 
                        <img src="assets/images/add-to-card.png" width="50px" height="50px" alt=""> 
                      </button> 
                    </div> 
                  </div> 
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
<<<<<<<< HEAD:Phonewebsite/home.html
        </div>
    </section>

    <footer>

    </footer>
</body>
<script>
  $(document).ready(function() {
    // Dữ liệu sản phẩm (có thể là một mảng các đối tượng JSON)
    var products = [
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 1",
        price: "100.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      {
        imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
        title: "Product 2",
        price: "200.000đ"
      },
      // Thêm các sản phẩm khác vào đây
    ];

    // Số sản phẩm trên mỗi hàng
    var productsPerRow = 4;

    // Tạo container cho sản phẩm
    var productContainer = $('<div class="product-row">');

    // Tạo các thẻ sản phẩm và thêm vào container
    for (var i = 0; i < products.length; i++) {
      // Tạo thẻ sản phẩm
      var productHTML = '<div class="card" style="width: 18rem; margin: 1rem">' +
                           '<img class="card-img-top" src="' + products[i].imgSrc + '" alt="Card image cap">' +
                           '<div class="card-body">' +
                             '<h5 class="card-title">' + products[i].title + '</h5>' +
                             '<div class="test">' +
                               '<div class="price-rating">' +
                                 '<p class="card-price" style="color:red; font-size:1.25rem;">' + products[i].price + '</p>' +
                                 '<div class="rating">' +
                                   '<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>' +
                                   '<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>' +
                                   '<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>' +
                                   '<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>' +
                                   '<input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>' +
                                 '</div>' +
                               '</div>' +
                               '<button class="add-cart">' +
                                 '<img src="assets/images/add-to-card.png" width="50px" height="50px" alt="">' +
                               '</button>' +
                             '</div>' +
                           '</div>' +
                         '</div>';

      // Thêm thẻ sản phẩm vào container
      productContainer.append(productHTML);

      // Kiểm tra xem có đủ số lượng sản phẩm để tạo một hàng không
      if ((i + 1) % productsPerRow == 0 || i === products.length - 1) {
        // Thêm container sản phẩm vào #product-container
        $('#product-container').append(productContainer);

        // Reset container cho hàng mới
        productContainer = $('<div class="product-row">');
      }
    }
  });
</script>
</html>
========
    </section>
>>>>>>>> origin/ThongLinh:Phonewebsite/pages/home.php
