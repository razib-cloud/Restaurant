<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from html.designingmedia.com/foodzey/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 06:14:55 GMT -->
<head>
    <title> Foodzey || </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontassets')}}/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('frontassets')}}/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontassets')}}/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontassets')}}/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontassets')}}/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontassets')}}/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('frontassets')}}/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontassets')}}/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontassets')}}/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('frontassets')}}/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontassets')}}/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontassets')}}/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontassets')}}/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('frontassets')}}/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="{{asset('frontassets')}}/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/animate.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('frontassets')}}/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/superclasses.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/custom.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/shop.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="{{asset('frontassets')}}/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <style>
    .sticky-header {
        position: sticky;
        top: 0;
        padding: 10px;
        z-index: 1000;
        background-color: transparent; /* Initially Transparent */
        transition: background-color 0.3s ease-in-out;
    }

    .scrolled {
        background-color: white; /* Change to white on scroll */
        position:fixed;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Optional shadow effect */
    }

    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @yield('css')

</head>

<body>
<div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff">
   @include('layout.frontend.header')
    <!-- SEARCH BAR -->
 <div id="search" class="">
    <span class="close">X</span>
    <form role="search" id="searchform" method="get">
      <input value="" name="q" type="search" placeholder="Type to Search">
    </form>
  </div>

  <!-- BANNER SECTION -->
  @yield('banner')
</div>

    <!-- bg outer wrapper -->



    <!-- SHOP SECTION -->
   @yield('page')


    <!-- FOOTER SECTION -->
    @include('layout.frontend.footer')
</div>
    <!-- Latest compiled JavaScript -->
    <!-- BACK TO TOP BUTTON -->
    <button id="back-to-top-btn" title="Back to Top"></button>
    <script src="{{asset('frontassets')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontassets')}}/js/popper.min.js"></script>
    <script src="{{asset('frontassets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontassets')}}/js/drawer-menu.html"></script>
    <script src="{{asset('frontassets')}}/js/owl.carousel.js"></script>
    <script src="{{asset('frontassets')}}/js/contact-form.js"></script>
    <script src="{{asset('frontassets')}}/js/video-popup.js"></script>
    <script src="{{asset('frontassets')}}/js/video-section.js"></script>
    <script src="{{asset('frontassets')}}/js/jquery.validate.js"></script>
    <script src="{{asset('frontassets')}}/js/wow.js"></script>
    <script src="{{asset('frontassets')}}/js/counter.js"></script>
    <script src="{{asset('frontassets')}}/js/custom.js"></script>
    <script src="{{asset('frontassets')}}/js/search.js"></script>
    <script src="{{asset('frontassets')}}/js/shop.js"></script>
    <script src="{{asset('frontassets')}}/js/remove-product.js"></script>
    <script src="{{asset('frontassets')}}/js/quantity.js"></script>
    <script src="{{ asset('assets/js/cart_.js') }}"></script>

    <script>
        window.addEventListener("scroll", function() {
            let header = document.getElementById("header");
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });


        function cart_length() {
            const cartLen = new Cart('restaurant');
                let items=  cartLen.getCart()?.length ?? 0;
                $('.cartlength').text(items);

        }
        cart_length()



    </script>



    @yield('script')
</body>


<!-- Mirrored from html.designingmedia.com/foodzey/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 06:14:59 GMT -->
</html>
