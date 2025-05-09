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
    <!-- CART SECTION -->
    <div class="w-100 padding-top padding-bottom checkout-section cart-section float-left gradient" id="cart_section">
        <div class="container">
            <!-- Cart Box -->
            <div class="cart-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="preview-box product-detail-box">
                    <div class="shopping-cart">
                        <!-- Column Labels -->
                        <div class="column-labels">
                            <label class="product-removal"></label>
                            <label class="product-image">Image</label>
                            <label class="product-details">Product</label>
                            <label class="product-price">Price</label>
                            <label class="product-quantity">Qty</label>
                            <label class="product-line-price">Total</label>
                        </div>

                        <!-- Shopping Cart Items -->
                        <div class="shopping-cart-info append">
                            <!-- Individual Product 1 -->





                        </div>
                    </div>
                </div>

                <!-- Cart Totals Section -->
                <div class="cart-total-outer">
                    <div class="cart-total-box">
                        <h4>Cart Totals</h4>
                        <ul class="list-unstyled">
                            <li><span>Subtotal</span> <span class="subtotal">$00</span></li>
                            <li><span>Total</span> <span class="total-price">$00</span></li>
                        </ul>
                        <!-- Checkout Button -->
                        <div class="secondary-button d-inline-block w-100">
                            <a href="{{ url('res/checkout') }}" class="d-inline-block">Proceed To Checkout</a>
                        </div>
                    </div>
                    <!-- cart-total-box -->
                </div>
                <!-- cart-box -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            const cartitems = new Cart('restaurant');
            printCart()


            function printCart() {
                let items = cartitems.getCart()


                if (items) {

                    let html = "";
                    let subtotal = 0;

                    items.forEach(element => {
                        subtotal += parseInt(element.subtotal);
                        html += `
                  <div class="product d-sm-flex d-block align-items-center">
                            <!-- Remove Product Button -->
                            <div class="product-removal">
                                <button data-id=${element.item_id}  class="remove-product remove"><i class="fas fa-times"></i></button>
                            </div>
                            <!-- Product Image -->
                            <div class="product-image">
                                <img src="{{ asset('products') }}/${element.photo}" alt="blog-image" class="img-fluid hover-effect">
                            </div>
                            <!-- Product Details -->
                            <div class="product-details">
                                <div class="product-title">${element.name}</div>
                            </div>
                            <!-- Product Price -->
                            <div class="product-price">${element.price}$</div>
                            <!-- Quantity Selector -->
                            <div class="product-quantity d-flex">
                                <div class="product-qty-details">
                                    <button data-id=${ JSON.stringify(element)}  class="value-button decrease-button decrease "  title="">-</button>
                                    <div class="number">${element.qty}</div>
                                    <button data-id=${JSON.stringify(element)} class="value-button increase-button increase "  title="">+</button>
                                </div>
                            </div>
                            <!-- Total Price for the Item -->
                            <div class="product-line-price">${element.subtotal} </div>
                        </div>

            `;
                    });
                    $(".append").html(html);
                    $(".subtotal").text(subtotal);
                    $(".total-price").text(subtotal);


                }
            }

            $(document).on('click', '.remove', function() {
                let id = $(this).attr('data-id');
                cartitems.delItem(id);
                printCart()
                cart_length()
            })


            $(document).on('click', '.increase', function() {
                let product = JSON.parse($(this).attr('data-id'));
                let item = {
                    "name": product.name,
                    "item_id": product.item_id,
                    "price": product.price,
                    "qty": 1,
                    "discount": 0,
                    'total_discount': 0,
                    "subtotal": product.price,
                    "photo": product.photo,
                };
                cartitems.save(item);
                printCart()


            })
            $(document).on('click', '.decrease', function() {
                let product = JSON.parse($(this).attr('data-id'));
                let item = {
                    "name": product.name,
                    "item_id": product.item_id,
                    "price": product.price,
                    "qty": 1 * (-1),
                    "discount": 0,
                    'total_discount': 0,
                    "subtotal": product.price,
                    "photo": product.photo,
                };
                cartitems.save(item);
                printCart()
            })










        })
    </script>
@endsection
