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
                                    <label>Phone *</label>
                                    <input type="text" class="form-control" name="phone" required>
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
                        <!-- Order summary container -->
                        <div class="order-summary-box">
                            <h4>Order Summary</h4>

                            <!-- Preview box containing product details -->
                            <div class="preview-box">
                                <!-- Header row for product and subtotal -->
                                <div class="product-outer">
                                    <span>Product</span>
                                    <span class="float-right total">Subtotal</span>
                                </div>



                                <!-- Individual product details -->
                                <div class=" product-outer append  d-flex flex-column">


                                </div>



                                <!-- Subtotal section -->
                                <div class="product-outer">
                                    <span>Subtotal</span>
                                    <span class="float-right subtotal">17.99 $</span>
                                </div>

                                <!-- Total price including shipping or other charges -->
                                <div class="shipping-outer">
                                    <span class="shipping">Total</span>
                                    <span class="total-price totalPayment">9.00 $</span>
                                </div>
                            </div>
                        </div>



                        <!-- Payment Information moved below Order Summary -->
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
                                <button class="btn-submit" type="submit">Place an order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection



@section('script')
    <script>
        $(function() {
            const checkout = new Cart('restaurant');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            printCart()

            function printCart() {
                let orders = checkout.getCart()
                console.log(orders);
                let html = "";
                let subtotal = 0;
                if (orders) {
                    orders.forEach(element => {
                        subtotal += parseInt(element.subtotal);
                        html += `
                        <div>
                        <div class="product-outer product-outer-details">
                            <figure class="mb-0">
                                <!-- Product image -->
                                <img src="{{ asset('products') }}/${element.photo}" alt="product-img">
                            </figure>
                            <!-- Product description -->


                            <span class="float-right total">  ${element.name}  $${element.price} </span>
                        </div>
                           </div>

                        `;
                    });



                } else {
                    subtotal += 0;
                    html += `
                    <div class = "product-outer-details" >
                    <figure class = "mb-0" >
                        < img src = "{{ asset('products') }}/${element.photo}"alt = "product-img" >
                    </figure> No Food in the cart.

                    </div>
                    <span class = "float-right total" > $ 00< /span>`
                }

                $(".append").html(html);
                $(".subtotal").text(subtotal);
                $(".total-price").text(subtotal);



            }

            $('.btn-submit').on('click', function() {

              

                let first_name = $("input[name='first_name']").val();
                let phone = $("input[name='phone']").val();
                let email = $("input[name='email']").val();
                let street_address = $("input[name='street_address']").val();
                let city = $("input[name='city']").val();
                let country = $("input[name='country']").val();
                let postcode = $("input[name='postcode']").val();
                let products = checkout.getCart();
                let total_payment = $(".totalPayment").text();



                let billing = $('#billing').val();
                let payment_method = $("input[name='payment_method']").val();



                let contact_address = {
                    first_name: first_name,
                    phone: phone,
                    email: email,
                    street_address: street_address,
                    city: city,
                    country: country,
                    postcode: postcode,
                    billing: billing,
                    payment_method: payment_method,
                    products: products
                }

                // console.log(contact_address);

                $.ajax({
                    url: "{{ url('api/order') }}",
                    type: 'post',
                    data: {
                        name: first_name,
                        phone: phone,
                        email: email,
                        address: street_address,
                        city: city,
                        country: country,
                        post_code: postcode,
                    // billing: billing,
                    payment_method: payment_method,
                    products: products,
                    total_payment: total_payment,
                    },
                    success: function(res) {
                        console.log(res);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });


            })


        })
    </script>
@endsection
