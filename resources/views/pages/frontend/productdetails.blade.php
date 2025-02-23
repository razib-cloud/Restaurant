@extends('layout.frontend.app')

@section('banner')
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
                            <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                        </ol>
                        <!-- breadcrumb -->
                    </div>
                    <h1 class="green-text">
                        Product Detail
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
<div class="float-left w-100 position-relative gradient">
    <!-- PRODUCT DETAIL SECTION -->
    <section class="w-100 float-left product-detail" id="product_detail_section">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="product-detail-outer">
                <div class="product-detail-tab">
                    <div class="d-flex align-items-center">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img1.jpg" alt="stock-img">
                                </figure>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img2.jpg" alt="stock-img">
                                </figure>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img3.jpg" alt="stock-img">
                                </figure>
                            </a>
                            <a class="nav-link" id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four"
                                role="tab" aria-controls="v-pills-four" aria-selected="false">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img4.jpg" alt="stock-img">
                                </figure>
                            </a>
                            <a class="nav-link" id="v-pills-five-tab" data-toggle="pill" href="#v-pills-five"
                                role="tab" aria-controls="v-pills-five" aria-selected="false">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img5.jpg" alt="stock-img">
                                </figure>
                            </a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img1.jpg" alt="stock-img">
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img2.jpg" alt="stock-img">
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img3.jpg" alt="stock-img">
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="v-pills-four" role="tabpanel"
                                aria-labelledby="v-pills-four-tab">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img4.jpg" alt="stock-img">
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="v-pills-five" role="tabpanel"
                                aria-labelledby="v-pills-five-tab">
                                <figure class="mb-0">
                                    <img class="img-fluid" src="{{asset('frontassets')}}/images/stock-img5.jpg" alt="stock-img">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="add-whish">
                        <a href="shop.html"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="stock-label">In stock</div>
                    <h2>Buna Kirchi </h2>
                    <div class="stock-rating-tag">
                        <div class="stock-rating-star">
                            <figure class="mb-0">
                                <img src="{{asset('frontassets')}}/images/stars.png" alt="star-img">
                            </figure>
                            <span class="d-ininline-block">(5)</span>
                        </div>
                    </div>
                    <div class="stock-value">10 in stock</div>
                    <div class="stock-price">
                        <span>$50</span> $40
                    </div>
                    <p>Neque porro quisquam est aui dolorem iesum ruia do
                        sit amet, consectetur, adipisci velit, sed quia non num
                        eius modi tempora incidunt ut labore et dolore magna
                        volutatem exercitationem ullam.</p>
                    <div class="quatity_button_wrapper">
                        <div class="quantity-field">
                            <button class="value-button decrease-button" onclick="decreaseValue2(this)"
                                title="">-</button>
                            <div class="number">0</div>
                            <button class="value-button increase-button" onclick="increaseValue2(this)" title="">+
                            </button>
                        </div>
                        <div class="secondary-button d-inline-block">
                            <a href="cart.html" class="d-inline-block">Add To Cart</a>
                        </div>
                    </div>
                    <div class="product-code">Product Sku:454292:Cat#1</div>
                    <div class="social-icon">
                        <span>Share :</span>
                        <ul class="list-unstyled mb-0">
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-arrow">
                        <a href="product-detail.html"><i class="fas fa-arrow-left"></i></a>
                        <a href="shop.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCT DETAIL SECTION -->
    <section class="w-100 float-left padding-bottom product-detail-info">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="product-detail-info-box">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                            role="tab" aria-controls="pills-contact" aria-selected="false">Shipping Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2"
                            role="tab" aria-controls="pills-contact2" aria-selected="false">Size Chart</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <p>Ratione volurtatem serui nesciunt neaue porro quisquam est, qui dolorem ipsum quia dolor
                            sit
                            amet, consectetur, adipisci velit,
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                            quaerat
                            voluptatem. Ut enim ad minima
                            veniam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>

                        <p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                            qui
                            ratione voluptatem sequi nesciunt
                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                            sed
                            quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="review-con">
                            <div class="review-client-box">
                                <figure class="mb-0">
                                    <img src="{{asset('frontassets')}}/images/review-person.jpg" alt="review-person.jpg">
                                </figure>
                                <div class="review-client-content">
                                    <div class="stock-rating-star">
                                        <figure class="mb-0">
                                            <img src="{{asset('frontassets')}}/images/stars.png" alt="star-img">
                                        </figure>
                                        <span class="d-ininline-block">(5)</span>
                                    </div>
                                    <div class="review-title-date d-flex">
                                        <h5 class="title">Admin - </h5><span> January 19, 2024</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex,
                                        vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus
                                        libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel.
                                        Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit
                                        amet
                                        quam tincidunt iaculis.</p>
                                </div>
                                <!-- review-client-box -->
                            </div>
                            <div class="rating_wrap">
                                <h6 class="rating-title mb-2">Add a review </h6>
                                <p class="mb-2">Your email address will not be published. Required fields are marked
                                    *
                                </p>
                                <span class="rating-sub-title">Your Rating</span>
                                <div class="stock-rating-star">
                                    <figure class="mb-0">
                                        <img src="{{asset('frontassets')}}/images/stars.png" alt="star-img">
                                    </figure>
                                    <span class="d-ininline-block">(5)</span>
                                </div>
                                <!-- Rating End -->
                                <form class="review-form-box">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>Name *</label>
                                            <input type="text">
                                        </li>
                                        <li>
                                            <label>Email *</label>
                                            <input type="email">
                                        </li>
                                        <li>
                                            <label>Comment</label>
                                            <textarea></textarea>
                                        </li>
                                    </ul>
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <div class="shipping-policy-con">
                            <h5>Shipping policy for our store</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                veniam,
                                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                commodo
                                consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                            <ul>
                                <li>1-2 business days (Typically by end of day)</li>
                                <li>30 days money back guaranty</li>
                                <li>24/7 live support</li>
                                <li>odio dignissim qui blandit praesent</li>
                                <li>luptatum zzril delenit augue duis dolore</li>
                                <li>te feugait nulla facilisi.</li>
                            </ul>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                quod
                                mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus
                                legentis
                                in iis qui facit eorum</p>
                            <p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                consuetudium
                                lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per</p>
                            <p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                parum
                                clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                        aria-labelledby="pills-contact-tab2">
                        <div class="size-chart-con">
                            <h5>Size Chart</h5>
                            <table class="table border mb-0">
                                <tbody>
                                    <tr>
                                        <td class="cun-name"><span>UK</span></td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>European</span></td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                        <td>52</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>usa</span></td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Australia</span></td>
                                        <td>28</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Canada</span></td>
                                        <td>24</td>
                                        <td>18</td>
                                        <td>14</td>
                                        <td>42</td>
                                        <td>36</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gradient color div -->
</div>

@endsection
