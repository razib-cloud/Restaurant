<div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff">
    <!-- HEADER SECTION -->
    <header class="w-100 float-left header-con main-box">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="index-2.html">
            <figure class="mb-0">
              <img src="{{asset('frontassets')}}/images/logo.png" alt="logo-icon">
            </figure>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link p-0 active" href="index-2.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-0" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-0" href="menu.html">Menu</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
                  <a class="dropdown-item" href="about.html">About</a>
                  <a class="dropdown-item" href="gallery.html">Gallery</a>
                  <a class="dropdown-item" href="menu.html">Menu</a>
                  <a class="dropdown-item" href="team.html">Team</a>
                  <a class="dropdown-item" href="shop.html">Shop</a>
                  <a class="dropdown-item" href="cart.html">Cart</a>
                  <a class="dropdown-item" href="product-detail.html">Product Detail</a>
                  <a class="dropdown-item" href="checkout.html">Checkout</a>
                  <a class="dropdown-item" href="404.html">404</a>
                  <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                  <a class="dropdown-item" href="testimonial.html">Testimonial</a>

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle p-0" href="blog.html" id="navbarDropdown4" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                  <a class="dropdown-item" href="blog.html">Blog</a>
                  <a class="dropdown-item" href="load-more.html">Load More</a>
                  <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                  <a class="dropdown-item" href="one-column.html">One Column</a>
                  <a class="dropdown-item" href="two-column.html">Two Column</a>
                  <a class="dropdown-item" href="three-column.html">Three Column</a>
                  <a class="dropdown-item" href="three-colum-sidbar.html">Three Column Sidbar</a>
                  <a class="dropdown-item" href="four-column.html">Four Column</a>
                  <a class="dropdown-item" href="six-colum-full-wide.html">Six Column</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link p-0" href="contact.html">Contact</a>
              </li>
            </ul>
            <!-- navbar collapse -->
          </div>
          <div class="header-contact">
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block icon-listing"><a class="icon position-relative d-inline-block" href="#search">
                  <figure class=""><img src="{{asset('frontassets')}}/images/search-icon.png" alt=""></figure>
                </a></li>
              <li class="d-inline-block btn-listing"><a href="shop.html" class="contact-btn d-inline-block">Order
                  Now</a></li>
              <!-- list unstyled -->
            </ul>
            <!-- header contact -->
          </div>
        </nav>
        <!-- container -->
      </div>
      <!-- header-con -->
    </header>
    <!-- SEARCH BAR -->
    <div id="search" class="">
      <span class="close">X</span>
      <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Type to Search">
      </form>
    </div>
    <!-- BANNER SECTION -->
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

    <!-- bg outer wrapper -->
  </div>
