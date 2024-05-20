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
            <div class="card-wrapper container-sm d-flex justify-content-around">
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top"  src="assets/images/iphone_15_pro_max_blue_thumbnew_600_x_6001.jpeg" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Iphone 15 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">15.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/rectangle_70.jpeg" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Iphone 14 Pro</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">12.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/rectangle_71.jpeg" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Iphone 14 Pro Max</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">13.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/Samsung/Samsung_Galaxy_A15.png" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Galaxy A15</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">13.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/Samsung/Samsung_Galaxy_Note_10_5G.png" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Galaxy Note 10</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">20.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/Samsung/SAMSUNG_Galaxy_S20_FE.png" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Galaxy S20</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">15.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/Vivo/Vivo_S18e.png" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Vivo S18</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">11.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/Vivo/Vivo_V30_Pro.png" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Vivo V30</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">12.000.000đ</p> 
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
              <div class="card d-flex align-items-center p-3" style="width: 18rem; margin: 1rem"> 
                  <img class="card-img-top" src="assets/images/Vivo/Vivo_X100_Pro.png" width="50" alt="Card image cap"> 
                  <div class="card-body"> 
                    <h5 class="card-title mt-2">Vivo X100</h5> 
                    <div class="test"> 
                      <div class="price-rating"> 
                        <p class="card-price" style="color:red; font-size:1.25rem;">17.000.000đ</p> 
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
    </section>
