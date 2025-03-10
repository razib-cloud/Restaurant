@extends('layout.frontend.app')
@section('banner')
    <!-- BANNER SECTION -->
    <section class="float-left w-100 sub-banner-con postion-relative main-box">
        <figure><img src="{{ asset('frontassets') }}/images/sub-banner-vector.png" alt="icon"
                class="position-absolute sub-vector"></figure>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="sub-banner-img-con">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-banner-img.jpg" alt="image"></figure>
                        <!-- sub banner img con -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="sub-banner-content-wrap">
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Menu</li>
                            </ol>
                            <!-- breadcrumb -->
                        </div>
                        <h1 class="green-text">
                            Menu Items
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
@endsection

@section('page')
    <!-- FEATUREED DISHES SECTION -->
    <section
        class="float-left w-100 position-relative featured-dishes-con padding-top padding-bottom main-box horizonal-listing">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">Popular Items</span>
                <h2 class="mb-0">Featured Dishes</h2>
                <!-- heading title con -->
            </div>
            <div class="tabs-box tabs-options">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <ul class="nav nav-tabs justify-content-center align-items-center d-flex border-bottom-0">
                            <li><a class="active" data-toggle="tab" href="#breakfast">Breakfast</a></li>
                            <li><a data-toggle="tab" href="#lunch">Lunch</a></li>
                            <li><a data-toggle="tab" href="#dinner">Dinner</a></li>
                            <li><a data-toggle="tab" href="#desserts">Desserts</a></li>
                            <li><a data-toggle="tab" href="#fastfood">Fast food</a></li>
                            <li><a data-toggle="tab" href="#drinks">Drinks</a></li>
                            <li><a data-toggle="tab" href="#soups">Soups</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="breakfast" class="tab-pane fade in active show">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img4.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Eggs Chopies <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$15</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img5.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Buna Kirchi <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img6.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Yummy Noodles <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img7.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chochin Cake <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img8.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Sweet Sandwich <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img9.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chiken Toast <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img5.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Buna Kirchi <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img9.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chiken Toast <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img6.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Yummy Noodles <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img8.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Sweet Sandwich <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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
                                <!-- dinner -->
                            </div>
                            <div id="desserts" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img7.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chochin Cake <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>

                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img8.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Sweet Sandwich <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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
                                <!-- dessert -->
                            </div>
                            <div id="fastfood" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img8.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Sweet Sandwich <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img9.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chiken Toast <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img5.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Buna Kirchi <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img6.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Yummy Noodles <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img6.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Yummy Noodles <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img5.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Buna Kirchi <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img7.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chochin Cake <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img5.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Buna Kirchi <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img8.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Sweet Sandwich <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
                                                    </div>
                                                </a>
                                                <!-- dish content -->
                                            </div>

                                            <!-- feature dish box -->
                                        </div>
                                        <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                            <figure><img src="{{ asset('frontassets') }}/images/food-dish-img9.jpg"
                                                    alt="image"></figure>
                                            <div class="dish-content">
                                                <h4>Chiken Toast <span
                                                        class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                                </h4>
                                                <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                    exlicao.</p>
                                                <img src="{{ asset('frontassets') }}/images/stars.png" alt="image"
                                                    class="border-radius0">
                                                <a href="cart.html">
                                                    <div class="plus-icon-box position-absolute">
                                                        <figure><img src="{{ asset('frontassets') }}/images/plus-icon.png"
                                                                alt="icon"></figure>
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

    <!-- DISCOUNT SECTION -->
    <section class="float-left w-100 position-relative discount-on-food-con padding-top padding-bottom main-box">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="discount-content-con position-relative">
                        <div class="heading-title-con mb-0">
                            <h2 class="text-white">Get Discount
                                On Fast Food</h2>
                            <p class="text-white">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci
                                velit, sed quia
                                non numquam eius .</p>
                            <div class="elementary-button d-inline-block white-button">
                                <a href="contact.html" class="d-inline-block">Contact Us</a>
                            </div>
                            <div class="secondary-button d-inline-block">
                                <a href="shop.html" class="d-inline-block">Order Now</a>
                            </div>
                            <!-- heading title con -->
                        </div>
                        <div class="fifty-off position-absolute text-center">
                            <span class="d-inline-block percentage barlow-font font-weight-bold green-text">50%</span><br>
                            <span class="d-inline-block text-white barlow-font font-weight-bold">OFF</span>
                        </div>

                        <!-- discount content con -->
                    </div>
                    <!-- col -->
                </div>

                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- disocunt on food con -->
    </section>

    <!-- OUR MENU SAECTION -->
    <section class="float-left w-100 position-relative our-menu-con padding-top padding-bottom main-box background-f7f9ff">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">All Items</span>
                <h2 class="mb-0">Explore Our Menu</h2>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex left-side flex-column">
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-img1.png" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Thai Noodles <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <a href="shop.html" class="d-inline-block">Order Now <i
                                    class="fa-solid fa-arrow-right ml-1"></i></a>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-img2.png" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Italian Pasta <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <a href="shop.html" class="d-inline-block">Order Now <i
                                    class="fa-solid fa-arrow-right ml-1"></i></a>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-img3.png" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Cajun Chicken <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$90</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <a href="shop.html" class="d-inline-block">Order Now <i
                                    class="fa-solid fa-arrow-right ml-1"></i></a>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6 d-flex right-side flex-column">
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-img4.png" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Fresh Salad <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$20</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <a href="shop.html" class="d-inline-block">Order Now <i
                                    class="fa-solid fa-arrow-right ml-1"></i></a>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-img5.png" alt="image"></figure>
                        <div class="menu-content">
                            <h4>French Fries <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <a href="shop.html" class="d-inline-block">Order Now <i
                                    class="fa-solid fa-arrow-right ml-1"></i></a>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{ asset('frontassets') }}/images/menu-img6.png" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Crispy Burger <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <a href="shop.html" class="d-inline-block">Order Now <i
                                    class="fa-solid fa-arrow-right ml-1"></i></a>
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
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="testimonial-img-con position-relative">
                        <figure><img src="{{ asset('frontassets') }}/images/testimonial-img.jpg" alt="image"
                                class="img-fluid border-radius5 z-index-1 position-relative img1">
                        </figure>
                        <figure><img src="{{ asset('frontassets') }}/images/green-elipse.png" alt="image"
                                class="position-absolute green-elipse"></figure>
                        <!-- testimonial img con -->
                    </div>

                    <!-- col -->
                </div>
                <div class="col-lg-7 col-md-7">
                    <!-- OWL CAROUSEL -->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="project-testimonial-content-con">
                                <figure><img src="{{ asset('frontassets') }}/images/testimonial-quote-icon.png"
                                        alt="icon" class="img-fluid quote-icon">
                                </figure>
                                <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                                    consectetur adipisci velit sed quia non numquam
                                    eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem”</p>
                                <img src="{{ asset('frontassets') }}/images/testimonials-stars.png" alt="stars"
                                    class="img-fluid stars">
                                <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina
                                    Parker</span> <span
                                    class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
                                <!-- project testimonial content con -->
                            </div>
                            <!-- item -->
                        </div>
                        <div class="item">
                            <div class="project-testimonial-content-con">
                                <figure><img src="{{ asset('frontassets') }}/images/testimonial-quote-icon.png"
                                        alt="icon" class="img-fluid quote-icon">
                                </figure>
                                <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                                    consectetur adipisci velit sed quia non numquam
                                    eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem”</p>
                                <img src="{{ asset('frontassets') }}/images/testimonials-stars.png" alt="stars"
                                    class="img-fluid stars">
                                <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina
                                    Parker</span> <span
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
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">Book Now</span>
                <h2 class="mb-0">Reserve a Table</h2>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <!-- Success Message -->
                    <div id="success-message" class="alert alert-success" style="display: none;">Reservation successful!
                    </div>

                    <form class="main-form text-center" id="reservationForm">
                        @csrf
                        <ul class="list-unstyled p-0 float-left w-100">
                            <li><input type="text" placeholder="Name" id="name" required></li>
                            <li><input type="tel" placeholder="Phone" id="phone" required></li>
                            <li><input type="email" placeholder="Email" id="email" required></li>
                            <li><input type="date" id="date" required></li>
                            <li><input type="time" id="time" required></li>
                            <li><input type="number" placeholder="Members" id="members" required></li>
                            <li>
                                @php
                                    use App\Models\ResTable;
                                    $restables = ResTable::paginate(10);
                                @endphp
                                <select class="table_id">
                                    <option value="">Select a Table</option>
                                    @foreach ($restables as $key => $table)
                                        <option value="{{ $table->id }}">{{ $table->table_number }}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li><input type="text" placeholder="Special request" id="special_requests"></li>
                        </ul>
                        <div class="secondary-button d-inline-block">
                            <button type="submit">Book Now</button>
                        </div>
                    </form>

                    <!-- Display Available Tables -->
                    <div id="tables" class="text-center mt-3"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        // $(function(){
        //     // alert();
        //     $('.table_id').on('change', function(){
        //         let val = $(this).val();
        //         alert(val)
        //     })
        // })
        document.addEventListener("DOMContentLoaded", function() {
            fetch('/api/reservation')
                .then(response => response.json())
                .then(data => {
                    let tableSelect = document.getElementById("table_number");
                    tableSelect.innerHTML = "<option value=''>Select Table</option>";

                    data.forEach(table => {
                        let option = document.createElement("option");
                        option.value = table.id;
                        option.textContent = `Table ${table.table_number} (Seats: ${table.capacity})`;
                        if (table.status === 1) {
                            option.disabled = true; // Disable reserved tables
                        }
                        tableSelect.appendChild(option);
                    });
                })
                .catch(error => console.error("Error fetching tables:", error));
        });

        document.addEventListener("DOMContentLoaded", function() {
            const submitButton = document.getElementById("submit");
            $('.table_id').on('change', function(){
                let val = $(this).val();
                // alert(val)
            })
            if (submitButton) {
                submitButton.addEventListener("click", function(event) {
                    event.preventDefault(); // Stop form from submitting normally

                    fetch('/api/tableReserve', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                name: document.getElementById('name')?.value || '',
                                phone: document.getElementById('phone')?.value || '',
                                email: document.getElementById('email')?.value || '',
                                date: document.getElementById('date')?.value || '',
                                time: document.getElementById('time')?.value || '',
                                members: document.getElementById('member')?.value || '',
                                // table_id: document.getElementById('table_number')?.value || '',
                                table_id: val,
                                special_requests: document.getElementById('special_requests')
                                    ?.value || ''
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert(data.success);
                                window.location.reload();
                            } else {
                                alert(data.error);
                            }
                        })
                        .catch(error => console.error("Error:", error));
                });
            } else {
                console.error("Error: Submit button not found!");
            }
        });
    </script>
@endsection
