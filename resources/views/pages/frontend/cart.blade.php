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
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                        <!-- breadcrumb -->
                    </div>
                    <h1 class="green-text">
                        Cart
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
    <div class="w-100 padding-top padding-bottom checkout-section cart-section float-left gradient" id="cart_section">
        <div class="container">
            <div class="cart-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="preview-box product-detail-box">
                    <div class="shopping-cart">
                        <div class="column-labels">
                            <label class="product-removal"></label>
                            <label class="product-image">Image</label>
                            <label class="product-details">Product</label>
                            <label class="product-price">Price</label>
                            <label class="product-quantity">Qty</label>
                            <label class="product-line-price">Total</label>
                        </div>

                        <div class="shopping-cart-info">
                            @foreach ($cartItems  as $item)
                                <div class="product d-sm-flex d-block align-items-center" data-id="{{ $item['id'] }}">
                                    <div class="product-removal">
                                        <button class="remove-product" onclick="removeFromCart({{ $item['id'] }})">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="product-image">
                                        <img src="{{ asset('images/products/'.$item['image']) }}" alt="product-image" class="img-fluid hover-effect">
                                    </div>
                                    <div class="product-details">
                                        <div class="product-title">{{ $item['name'] }}</div>
                                    </div>
                                    <div class="product-price">${{ number_format($item['price'], 2) }}</div>
                                    <div class="product-quantity d-flex">
                                        <div class="product-qty-details">
                                            <button class="value-button decrease-button" onclick="updateQuantity({{ $item['id'] }}, 'decrease')">-</button>
                                            <div class="number">{{ $item['quantity'] }}</div>
                                            <button class="value-button increase-button" onclick="updateQuantity({{ $item['id'] }}, 'increase')">+</button>
                                        </div>
                                    </div>
                                    <div class="product-line-price">${{ number_format($item['quantity'] * $item['price'], 2) }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="cart-total-outer">
                    <div class="cart-total-box">
                        <h4>Cart Totals</h4>
                        <ul class="list-unstyled">
                            <li><span>Subtotal</span> <span>${{ number_format($cartTotal['subtotal'], 2) }}</span></li>
                            <li><span>Total</span> <span class="total-price">${{ number_format($cartTotal['total'], 2) }}</span></li>
                        </ul>
                        <div class="secondary-button d-inline-block w-100">
                            <a href="{{ route('checkout.index') }}" class="d-inline-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateQuantity(id, action) {
            $.ajax({
                url: '/cart/update',
                method: 'POST',
                data: {
                    id: id,
                    action: action,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    location.reload(); // Reload the page to reflect the updated cart
                },
                error: function(xhr, status, error) {
                    alert('An error occurred. Please try again.');
                    console.error(error);
                }
            });
        }

        function removeFromCart(id) {
            $.ajax({
                url: '/cart/remove',
                method: 'POST',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    location.reload(); // Reload the page to reflect the updated cart
                },
                error: function(xhr, status, error) {
                    alert('An error occurred. Please try again.');
                    console.error(error);
                }
            });
        }
    </script>
@endsection
