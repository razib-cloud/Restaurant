 <!-- LOADER -->
 <div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>
<!-- OUTER BG WRAPPER -->
<div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff sub-banner-wrapper">
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
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="index-2.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0 active" href="#" id="navbarDropdown5"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
                                <a class="dropdown-item" href="about.html">About</a>
                                <a class="dropdown-item" href="gallery.html">Gallery</a>
                                <a class="dropdown-item" href="menu.html">Menu</a>
                                <a class="dropdown-item" href="team.html">Team</a>
                                <a class="dropdown-item active" href="shop.html">Shop</a>
                                <a class="dropdown-item" href="cart.html">Cart</a>
                                <a class="dropdown-item" href="product-detail.html">Product Detail</a>
                                <a class="dropdown-item" href="checkout.html">Checkout</a>
                                <a class="dropdown-item" href="404.html">404</a>
                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                <a class="dropdown-item" href="testimonial.html">Testimonial</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="blog.html" id="navbarDropdown4"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Blog</a>
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
                        <li class="d-inline-block icon-listing"><a class="icon position-relative d-inline-block"
                                href="#search">
                                <figure class=""><img src="{{asset('frontassets')}}/images/search-icon.png" alt=""></figure>
                            </a></li>
                        <li class="d-inline-block btn-listing"><a href="shop.html"
                                class="contact-btn d-inline-block">Order
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
    <!-- BANNER SECTION -->
    <section class="float-left w-100 sub-banner-con postion-relative main-box">
        <figure><img src="{{asset('frontassets')}}/images/sub-banner-vector.png" alt="icon" class="position-absolute sub-vector">
        </figure>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="sub-banner-img-con">
                        <figure><img src="{{asset('frontassets')}}/images/sub-banner-image.jpg" alt="image"></figure>
                        <!-- sub banner img con -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="sub-banner-content-wrap">
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                            <!-- breadcrumb -->
                        </div>
                        <h1 class="green-text">
                            Shop
                        </h1>
                        <p class="font-weight-light mb-0">Quis autem vel eum iure reprehenderit qui
                            ea voluptate velit esse quam nihil molestiae consequatur dolorem.</p>
                        <!-- sub banner content wrapper -->
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
<!-- SEARCH BAR -->
<div id="search" class="">
    <span class="close">X</span>
    <form role="search" id="searchform" method="get">
      <input value="" name="q" type="search" placeholder="Type to Search">
    </form>
  </div>
