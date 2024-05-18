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
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
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
        </div>
    </section>
