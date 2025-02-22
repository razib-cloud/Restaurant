@extends('layout.frontend.app')


@section('banner')
<section class="float-left w-100 banner-con postion-relative main-box">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-7">
          <span class="d-block text-white off-tag barlow-font font-weight-bold">30%
            <span class="d-block text-white barlow-font font-weight-bold span-off"> OFF</span></span>
          <!--  -->
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0">
                <figure><img src="{{asset('frontassets')}}/images/banner-smol-img2.png" alt="image"></figure>
              </li>
              <li data-target="#carouselExampleIndicators" class="active" data-slide-to="1">
                <figure><img src="{{asset('frontassets')}}/images/banner-smol-img1.png" alt="image"></figure>
              </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2">
                <figure><img src="{{asset('frontassets')}}/images/banner-smol-img3.png" alt="image"></figure>
              </li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item">
                <figure><img src="{{asset('frontassets')}}/images/banner-img2.png" alt="image" class="img-fluid"></figure>
              </div>
              <div class="carousel-item active">
                <figure><img src="{{asset('frontassets')}}/images/banner-img1.png" alt="image" class="img-fluid"></figure>
              </div>
              <div class="carousel-item">
                <figure><img src="{{asset('frontassets')}}/images/banner-img3.png" alt="image" class="img-fluid"></figure>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <!-- col -->
        </div>
        <div class="col-lg-5 col-md-5">
          <div class="banner-content-con">
            <span class="d-block navy-text playfair-font position-relative">Welcome to our</span>
            <h1 class="navy-text"><span class="d-block green-text">Delicious</span>Food Collection</h1>
            <p class="font-weight-light">Duis aute irure dolor in reprehenderit in vole uatate velit esse cillum dolore.
            </p>
            <div class="elementary-button d-inline-block">
              <a href="about.html" class="d-inline-block">About Us</a>
            </div>
            <div class="secondary-button d-inline-block">
              <a href="menu.html" class="d-inline-block">Our Menu</a>
            </div>
            <!-- banner content con -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- banner con -->
  </section>

@endsection

@section('page')


<!-- CATEGORIES SECION  -->
<section class="float-left w-100 position-relative categories-con padding-top padding-bottom main-box">
    <figure class=""><img src="{{asset('frontassets')}}/images/vector.png" alt="vector" class="position-absolute vector"></figure>
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex">
          <div class="category-box var1 w-100 position-relative">
            <div class="category-content z-index-1 position-relative">
              <h3 class="text-white">Burgers</h3>
              <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
              <div class="primary-button d-inline-block">
                <a href="cart.html" class="d-inline-block">Order Now</a>
              </div>
              <!-- category content -->
            </div>
            <!-- category box -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6 d-flex">
          <div class="category-box var2 w-100 position-relative">
            <div class="category-content z-index-1 position-relative">
              <h3 class="text-white">Fries</h3>
              <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
              <div class="primary-button d-inline-block">
                <a href="cart.html" class="d-inline-block">Order Now</a>
              </div>
              <!-- category content -->
            </div>
            <!-- category box -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6 d-flex">
          <div class="category-box var3 w-100 position-relative">
            <div class="category-content z-index-1 position-relative float-right">
              <h3 class="text-white">Drinks</h3>
              <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
              <div class="primary-button d-inline-block">
                <a href="cart.html" class="d-inline-block">Order Now</a>
              </div>
              <!-- category content -->
            </div>
            <!-- category box -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6 d-flex">
          <div class="category-box var4 w-100 position-relative">
            <div class="category-content z-index-1 position-relative float-right">
              <h3 class="text-white">Sandwich</h3>
              <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
              <div class="primary-button d-inline-block">
                <a href="cart.html" class="d-inline-block">Order Now</a>
              </div>
              <!-- category content -->
            </div>
            <!-- category box -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- categories con -->
  </section>

  <!-- ABOUT US SECTION -->
  <section class="float-left w-100 position-relative about-us-con padding-top padding-bottom main-box background-f7f9ff">
    <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-xl-0 order-lg-0 order-md-0 order-1">
          <div class="about-us-content">
            <div class="heading-title-con mb-0">
              <span class="d-block special-text green-text playfair-font font-weight-light">About Us</span>
              <h2>Why We Are <br>
                The Best</h2>
              <p>Quis autem vel eum iure reprehenderit qui in evoluptate velit esse quam nihil molestiae consequatur, vel
                illum qui dolorem eum fugiat quo voluptas nulla pariatureaque ipsa quae ab illo inventore veritatis et
                quasi architecto beatae vitae dicta sunt explicabo.</p>
              <!-- heading title con -->
            </div>
            <div class="about-services">
              <div class="abt-service-box text-center">
                <figure><img src="{{asset('frontassets')}}/images/about-services-img1.png" alt="icon" class="img-fluid"></figure>
                <span class="barlow-font d-block mb-0">Buffet Service</span>
                <!--  -->
              </div>
              <div class="abt-service-box text-center">
                <figure><img src="{{asset('frontassets')}}/images/about-services-img2.png" alt="icon" class="img-fluid"></figure>
                <span class="barlow-font d-block mb-0">Home Delivery</span>
                <!--  -->
              </div>
              <div class="abt-service-box text-center">
                <figure><img src="{{asset('frontassets')}}/images/about-services-img3.png" alt="icon" class="img-fluid"></figure>
                <span class="barlow-font d-block mb-0">Online Booking</span>
                <!--  -->
              </div>
              <div class="abt-service-box text-center">
                <figure><img src="{{asset('frontassets')}}/images/about-services-img4.png" alt="icon" class="img-fluid"></figure>
                <span class="barlow-font d-block mb-0">Discount</span>
                <!--  -->
              </div>
              <!-- about services -->
            </div>
            <!-- about us content  -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="about-img-con position-relative">
            <figure><img src="{{asset('frontassets')}}/images/about-img.jpg" alt="image"
                class="img-fluid position-relative z-index-1 border-radius5">
            </figure>
            <figure><img src="{{asset('frontassets')}}/images/ellipse2.png" alt="image" class="position-absolute elipse2"></figure>

            <!-- about img con -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </section>

  <!-- FEATUREED DISHES SECTION -->
  <section class="float-left w-100 position-relative featured-dishes-con padding-top padding-bottom main-box">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="heading-title-con text-center">
        <span class="d-block special-text green-text playfair-font font-weight-light">Popular Items</span>
        <h2 class="mb-0">Featured Dishes</h2>
        <!-- heading title con -->
      </div>
      <div class="tabs-box tabs-options">
        <div class="row">
          <div class="col-lg-2 col-md-12">
            <ul class="nav nav-tabs justify-content-center align-items-center d-block border-bottom-0">
              <li><a class="active" data-toggle="tab" href="#breakfast">Breakfast</a></li>
              <li><a data-toggle="tab" href="#lunch">Lunch</a></li>
              <li><a data-toggle="tab" href="#dinner">Dinner</a></li>
              <li><a data-toggle="tab" href="#desserts">Desserts</a></li>
              <li><a data-toggle="tab" href="#fastfood">Fast food</a></li>
              <li><a data-toggle="tab" href="#drinks">Drinks</a></li>
              <li><a data-toggle="tab" href="#soups">Soups</a></li>
            </ul>
            <!-- col -->
          </div>
          <div class="col-lg-10 col-md-12">
            <div class="tab-content">
              <div id="breakfast" class="tab-pane fade in active show">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <!-- row -->
                </div>

                <!-- breakfast -->
              </div>
              <div id="lunch" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>

                  <!-- row -->
                </div>
                <!-- lunch -->
              </div>
              <div id="dinner" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <!-- row -->
                </div>

                <!-- lunch -->
              </div>
              <div id="desserts" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>

                  <!-- row -->
                </div>
                <!-- lunch -->
              </div>
              <div id="fastfood" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <!-- row -->
                </div>
                <!-- fast food -->
              </div>
              <div id="drinks" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <!-- row -->
                </div>
                <!-- drinks -->
              </div>
              <div id="soups" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img1.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Eggs Chopies <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img3.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Buna Kirchi <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex">
                    <div class="feature-dish-box position-relative w-100">
                      <figure><img src="{{asset('frontassets')}}/images/food-dish-img2.jpg" alt="image" class="img-fluid"></figure>
                      <div class="dish-content">
                        <h4>Chochin Cake <span
                            class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                        </h4>
                        <p>Fugiat quo voluptas nulla
                          inventore veritatis .</p>
                        <img src="{{asset('frontassets')}}/images/stars.png" alt="image" class="border-radius0">
                        <a href="cart.html">
                          <div class="plus-icon-box position-absolute">
                            <figure><img src="{{asset('frontassets')}}/images/plus-icon.png" alt="icon"></figure>
                          </div>
                        </a>
                        <!-- dish content -->
                      </div>

                      <!-- feature dish box -->
                    </div>
                    <!-- col -->
                  </div>
                  <!-- row -->
                </div>
                <!-- soups -->
              </div>

            </div>
            <!-- col -->
          </div>
          <!-- row -->
        </div>
        <!-- tabs box -->
      </div>
      <!-- container -->
    </div>
    <!-- featured dishes con -->
  </section>

  <!-- OUR MENU SECTION -->
  <section class="float-left w-100 position-relative our-menu-con padding-top padding-bottom main-box background-f7f9ff">
    <figure class=""><img src="{{asset('frontassets')}}/images/vector1.png" alt="vector" class="position-absolute vector"></figure>
    <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="heading-title-con text-center">
        <span class="d-block special-text green-text playfair-font font-weight-light">All Items</span>
        <h2 class="mb-0">Explore Our Menu</h2>
        <!-- heading title con -->
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex left-side flex-column">
          <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
            <figure><img src="{{asset('frontassets')}}/images/menu-img1.png" alt="image"></figure>
            <div class="menu-content">
              <h4>Thai Noodles <span
                  class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
              </h4>
              <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
              <a href="shop.html" class="d-inline-block">Order Now <i class="fa-solid fa-arrow-right ml-1"></i></a>
              <!-- menu content -->
            </div>
            <!-- menu box -->
          </div>
          <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
            <figure><img src="{{asset('frontassets')}}/images/menu-img2.png" alt="image"></figure>
            <div class="menu-content">
              <h4>Italian Pasta <span
                  class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
              </h4>
              <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
              <a href="shop.html" class="d-inline-block">Order Now <i class="fa-solid fa-arrow-right ml-1"></i></a>
              <!-- menu content -->
            </div>
            <!-- menu box -->
          </div>
          <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
            <figure><img src="{{asset('frontassets')}}/images/menu-img3.png" alt="image"></figure>
            <div class="menu-content">
              <h4>Cajun Chicken <span
                  class="d-inline-block float-right green-text price barlow-font font-weight-600">$90</span>
              </h4>
              <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
              <a href="shop.html" class="d-inline-block">Order Now <i class="fa-solid fa-arrow-right ml-1"></i></a>
              <!-- menu content -->
            </div>
            <!-- menu box -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6 d-flex right-side flex-column">
          <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
            <figure><img src="{{asset('frontassets')}}/images/menu-img4.png" alt="image"></figure>
            <div class="menu-content">
              <h4>Fresh Salad <span
                  class="d-inline-block float-right green-text price barlow-font font-weight-600">$20</span>
              </h4>
              <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
              <a href="shop.html" class="d-inline-block">Order Now <i class="fa-solid fa-arrow-right ml-1"></i></a>
              <!-- menu content -->
            </div>
            <!-- menu box -->
          </div>
          <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
            <figure><img src="{{asset('frontassets')}}/images/menu-img5.png" alt="image"></figure>
            <div class="menu-content">
              <h4>French Fries <span
                  class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
              </h4>
              <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
              <a href="shop.html" class="d-inline-block">Order Now <i class="fa-solid fa-arrow-right ml-1"></i></a>
              <!-- menu content -->
            </div>
            <!-- menu box -->
          </div>
          <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
            <figure><img src="{{asset('frontassets')}}/images/menu-img6.png" alt="image"></figure>
            <div class="menu-content">
              <h4>Crispy Burger <span
                  class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
              </h4>
              <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
              <a href="shop.html" class="d-inline-block">Order Now <i class="fa-solid fa-arrow-right ml-1"></i></a>
              <!-- menu content -->
            </div>
            <!-- menu box -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <div class="float-left w-100 text-center view-all-item-con">
        <div class="secondary-button d-inline-block">
          <a href="menu.html" class="d-inline-block">View All Items</a>
        </div>
        <!-- view all item con -->
      </div>
      <!-- container -->
    </div>
    <!-- our menu con -->
  </section>

  <!-- TESTIMONIALS SECTION -->
  <div class="float-left w-100 position-relative testimonials-con padding-top padding-bottom main-box">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-5">
          <div class="testimonial-img-con position-relative">
            <figure><img src="{{asset('frontassets')}}/images/testimonial-img.jpg" alt="image"
                class="img-fluid border-radius5 z-index-1 position-relative img1">
            </figure>
            <figure><img src="{{asset('frontassets')}}/images/green-elipse.png" alt="image" class="position-absolute green-elipse"></figure>
            <!-- testimonial img con -->
          </div>

          <!-- col -->
        </div>
        <div class="col-lg-7 col-md-7">
          <!-- OWL CAROUSEL -->
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="project-testimonial-content-con">
                <figure><img src="{{asset('frontassets')}}/images/testimonial-quote-icon.png" alt="icon" class="img-fluid quote-icon">
                </figure>
                <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                  consectetur adipisci velit sed quia non numquam
                  eius modi tempora incidunt ut labore et dolore
                  magnam aliquam quaerat voluptatem”</p>
                <img src="{{asset('frontassets')}}/images/testimonials-stars.png" alt="stars" class="img-fluid stars">
                <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina Parker</span> <span
                  class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
                <!-- project testimonial content con -->
              </div>
              <!-- item -->
            </div>
            <div class="item">
              <div class="project-testimonial-content-con">
                <figure><img src="{{asset('frontassets')}}/images/testimonial-quote-icon.png" alt="icon" class="img-fluid quote-icon">
                </figure>
                <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                  consectetur adipisci velit sed quia non numquam
                  eius modi tempora incidunt ut labore et dolore
                  magnam aliquam quaerat voluptatem”</p>
                <img src="{{asset('frontassets')}}/images/testimonials-stars.png" alt="stars" class="img-fluid stars">
                <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina Parker</span> <span
                  class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
                <!-- project testimonial content con -->
              </div>
              <!-- item -->
            </div>
            <!-- owl carousel -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </div>

  <!-- RESERVE A TABLE SECTION -->
  <section
    class="float-left w-100 position-relative padding-top padding-bottom main-box reserve-table-con background-f7f9ff">
    <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="heading-title-con text-center">
        <span class="d-block special-text green-text playfair-font font-weight-light">Book Now</span>
        <h2 class="mb-0">Reserve a Table </h2>
        <!-- heading title con -->
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12">
          <form class="main-form text-center" method="post" id="contactpage">
            <ul class="list-unstyled p-0 float-left w-100">
              <li>
                <input type="text" placeholder="Name" name="fname" id="fname">
              </li>
              <li>
                <input type="tel" placeholder="Phone" name="phone" id="phone">
              </li>
              <li>
                <input type="email" placeholder="Email" name="email" id="email">
              </li>
              <li>
                <input type="date" name="date" id="date">
              </li>
              <li>
                <input type="time" name="time" id="time">
              </li>
              <li>
                <input type="number" placeholder="Members" name="member" id="member">
              </li>
            </ul>
            <div class="secondary-button d-inline-block">
              <button type="submit" id="submit">Book Now</button>
            </div>
          </form>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </section>


  @endsection
