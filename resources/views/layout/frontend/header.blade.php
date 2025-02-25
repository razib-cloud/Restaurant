
    <!-- HEADER SECTION -->

    <header class="w-100 float-left header-con main-box sticky-header" id="header">
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
                <a class="nav-link p-0 active" href="{{url('res/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-0" href="{{url('res/about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-0" href="{{url('res/menu')}}">Menu</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
                  <a class="dropdown-item" href="{{url('res/about')}}">About</a>
                  <a class="dropdown-item" href="gallery.html">Gallery</a>
                  <a class="dropdown-item" href="{{url('res/menu')}}">Menu</a>
                  <a class="dropdown-item" href="team.html">Team</a>
                  <a class="dropdown-item" href="{{url('res/shop')}}">Shop</a>
                  <a class="dropdown-item" href="{{url('res/cart')}}">Cart</a>

                  <a class="dropdown-item" href="{{url('res/productdetails')}}">Product Detail</a>
                  <a class="dropdown-item" href="{{url('res/checkout')}}">Checkout</a>
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
                <a class="nav-link p-0" href="{{url('res/contact')}}">Contact</a>
              </li>
            </ul>
            <!-- navbar collapse -->
          </div>
          <div class="header-contact">
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block icon-listing"><a class="icon position-relative d-inline-block" href="#search">
                  <figure class=""><img src="{{asset('frontassets')}}/images/search-icon.png" alt=""></figure>
                </a></li>

              <li class="d-inline-block icon-listing">
                <a class="icon position-relative d-inline-block" href="{{url('res/cart')}}">
                  <i class="fas fa-shopping-cart cartlength">0</i> <!-- Cart Icon -->
                </a>
              </li>

              <li class="d-inline-block btn-listing"><a href="{{url('res/shop')}}" class="contact-btn d-inline-block">Order
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





