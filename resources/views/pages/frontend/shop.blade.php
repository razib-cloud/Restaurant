@extends('layout.frontend.app')

@section('banner')
    <!-- BANNER SECTION -->
    <section class="float-left w-100 sub-banner-con postion-relative main-box">
        <figure><img src="{{ asset('frontassets') }}/images/sub-banner-vector.png" alt="icon"
                class="position-absolute sub-vector">
        </figure>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="sub-banner-img-con">
                        <figure><img src="{{ asset('frontassets') }}/images/sub-banner-image.jpg" alt="image"></figure>
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
@endsection

@section('page')
    <section class="shop-con w-100 float-left padding-top padding-bottom gradient">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">Book Now</span>
                <h2>Discover The Master
                    Arrivals</h2>
            </div>
            <div class="shop-box main-shop-page">


                @foreach ($products as $product)
                    <div class="shop-box-item">
                        <div class="shop-box-img">
                            <div class="sale-lable shop-label">Sale</div>
                            <figure class="mb-0">
                                <img src="{{ asset('products') }}/{{ $product->photo }}" alt="shop-img">
                            </figure>
                            <div class="shop-box-cart">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                                <div class="generic-btn">
                                    <a style="cursor: pointer" class="add_cart_btn"
                                        data-product='{{ json_encode($product) }}'>Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-box-details">
                            <figure>
                                <img src="{{ asset('frontassets') }}/images/star-img3.png" alt="star-img">
                            </figure>
                            <h6>{{ $product->name }}</h6>
                            <div class="shop-price">
                                <span class="inline-block">${{ $product->price }}.00 - </span>${{ $product->price }}.00
                            </div>
                        </div>
                        <!-- shop-box-item -->
                    </div>
                @endforeach


                <!-- shop-box -->
            </div>

            <div class="pagination-con">
                <ul class="pagination mb-0 justify-content-center">
                    <li class="page-item"><a class="page-link" href="shop.html">Previous</a></li>
                    <li class="page-item"><a class="page-link active" href="product-detail.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="cart.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="checkout.html">3</a></li>
                    <li class="page-item"><a class="page-link" href="product-detail.html">Next</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script src="{{ asset('assets/js/cart_.js') }}"></script>

    <script>
        $(function() {

            const cart = new Cart('restaurant');


            $(document).on('click', '.add_cart_btn', function() {
                let product = JSON.parse($(this).attr('data-product'));
                console.log(product);
                let item = {
                    "name": product.name,
                    "item_id": product.id,
                    "price": product.price,
                    "qty": 1,
                    "discount": 0,
                    'total_discount': 0,
                    "subtotal": product.price,
                    "photo": product.photo,
                };

                cart.save(item);
                cart_length();
            });


            function cart_length() {
                let items = cart.getCart()?.length ?? 0;
                $('.cartlength').text(items);

            }
            cart_length()


        })
    </script>
@endsection
