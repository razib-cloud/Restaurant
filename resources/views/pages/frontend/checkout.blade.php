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
                        <figure><img src="{{ asset('frontassets') }}/images/sub-banner-image.jpg" alt="image"></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="sub-banner-content-wrap">
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </div>
                        <h1 class="green-text">Checkout</h1>
                        <p class="font-weight-light mb-0">Quis autem vel eum iure reprehenderit qui ea voluptate velit esse
                            quam nihil molestiae consequatur dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page')
    <!-- CHECKOUT SECTION -->
    <section class="w-100 checkout-section float-left padding-top padding-bottom gradient" id="checkout_section">
        <form id="checkout-form">
            <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="checkout-form-box">
                            <h4>Contact Information</h4>
                            <div class="create-nft-box float-left w-100 position-relative check-out-form">
                                <div class="form-group">
                                    <label>First name *</label>
                                    <input type="text" class="form-control" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last name *</label>
                                    <input type="text" class="form-control" name="last_name" required>
                                </div>
                                <div class="form-group special">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="checkout-form-box mb-lg-0">
                            <h4>Delivery Information</h4>
                            <div class="create-nft-box float-left w-100 position-relative check-out-form">
                                <div class="form-group">
                                    <label>Street address *</label>
                                    <input type="text" class="form-control" name="street_address" required>
                                </div>
                                <div class="form-group">
                                    <label>Town/City *</label>
                                    <input type="text" class="form-control" name="city" required>
                                </div>
                                <div class="form-group">
                                    <label>Country *</label>
                                    <input type="text" class="form-control" name="country" required>
                                </div>
                                <div class="form-group">
                                    <label>Postcode *</label>
                                    <input type="text" class="form-control" name="postcode" required>
                                </div>
                                <div class="form-group billing-box">
                                    <input type="checkbox" id="billing">
                                    <label class="mb-0" for="billing">Use a different billing address</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="order-summary-box">
                            <h4>Order Summary</h4>
                            <div class="preview-box" id="order-summary">
                                <!-- Cart items will be inserted here -->
                            </div>
                        </div>

                        <div class="payment-info">
                            <h4>Payment Information</h4>
                            <p>Explore our convenient payment option & proceed with confidence</p>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <input type="radio" id="delivery" name="payment_method" value="cash_on_delivery">
                                    <label for="delivery">Cash on delivery</label>
                                </li>
                                <li>
                                    <input type="radio" id="credit" name="payment_method" value="credit_card">
                                    <label for="credit">Credit Card Method</label>
                                </li>
                            </ul>
                            <div class="secondary-button">
                                <button type="submit">Place an order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {


            // Handle form submission
            $("#checkout-form").submit(function(e) {
                e.preventDefault();

                // Get form data
                let formData = {
                    first_name: $("input[name='first_name']").val(),
                    last_name: $("input[name='last_name']").val(),
                    email: $("input[name='email']").val(),
                    street_address: $("input[name='street_address']").val(),
                    city: $("input[name='city']").val(),
                    country: $("input[name='country']").val(),
                    postcode: $("input[name='postcode']").val(),
                    payment_method: $("input[name='payment_method']:checked").val()
                };

                // Simple validation
                if (!formData.first_name || !formData.last_name || !formData.email || !formData
                    .street_address || !formData.city || !formData.country || !formData.postcode || !
                    formData.payment_method) {
                    alert("Please fill all the fields correctly.");
                    return;
                }

                // Save data to localStorage
                localStorage.setItem('checkoutData', JSON.stringify(formData));

                // Confirmation message
                alert("Your checkout information has been saved!");
            });

            // Load cart items from localStorage and display in order summary
            function loadCartItems() {
                let cart = JSON.parse(localStorage.getItem('restaurant')) || [];

                if (cart.length === 0) {
                    $('#order-summary').html('<p>Your cart is empty!</p>');
                    return;
                }

                let orderSummaryHtml = '';
                let subtotal = 0;

                cart.forEach(item => {
                    orderSummaryHtml += `
                    <div class="product-outer">
                        <div class="product-outer-details">
                            <figure class="mb-0">
                                <img src="${item.photo}" alt="product-img">
                            </figure>
                            ${item.name}
                        </div>
                        <span class="float-right total">${item.price} $</span>
                    </div>
                    `;
                    subtotal += parseFloat(item.price); // Calculate subtotal
                });

                orderSummaryHtml += `
                    <div class="product-outer">
                        <span>Subtotal</span>
                        <span class="float-right total">${subtotal.toFixed(2)} $</span>
                    </div>
                    <div class="shipping-outer">
                        <span class="shipping">Total</span>
                        <span class="price">${(subtotal + 9).toFixed(2)} $</span> <!-- Assuming a fixed shipping cost -->
                    </div>
                `;

                $('#order-summary').html(orderSummaryHtml);
            }

            // Load cart items on page load
            loadCartItems();
        });
    </script>
@endsection
