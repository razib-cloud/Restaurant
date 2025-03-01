
@section('script')

<script src="{{ asset('assets/js/cart_.js') }}"></script>

<script>


function loadCheckoutData() {
    let storedData = localStorage.getItem('checkoutData');
    if (storedData) {
        let data = JSON.parse(storedData); // Convert the stored JSON string back to an object
        $("input[name='first_name']").val(data.first_name); // Set the first name input field
        $("input[name='last_name']").val(data.last_name);   // Set the last name input field
        $("input[name='email']").val(data.email);           // Set the email input field
        $("input[name='street_address']").val(data.street_address); // Set street address
        $("input[name='city']").val(data.city);             // Set city
        $("input[name='country']").val(data.country);       // Set country
        $("input[name='postcode']").val(data.postcode);     // Set postcode
        $("input[name='payment_method'][value='" + data.payment_method + "']").prop('checked', true); // Set selected payment method
    }
}
loadCheckoutData();



$("#checkout-form").submit(function(e) {
    e.preventDefault(); // Prevents the default form submission (page refresh)

    // Collect form data
    let formData = {
        first_name: $("input[name='first_name']").val(),
        last_name: $("input[name='last_name']").val(),
        email: $("input[name='email']").val(),
        street_address: $("input[name='street_address']").val(),
        city: $("input[name='city']").val(),
        country: $("input[name='country']").val(),
        postcode: $("input[name='postcode']").val(),
        payment_method: $("input[name='payment_method']:checked").val() // Gets the selected payment method
    };

    // Simple validation
    if (!formData.first_name || !formData.last_name || !formData.email || !formData.street_address ||
        !formData.city || !formData.country || !formData.postcode || !formData.payment_method) {
        alert("Please fill all the fields correctly.");
        return; // Stops further execution if any field is missing
    }

    // Save the data to localStorage
    localStorage.setItem('checkoutData', JSON.stringify(formData));

    // Confirmation message
    alert("Your checkout information has been saved!");
});











$(document).ready(function() {
    // Function to load cart items from localStorage and display them in the order summary
    function loadCartItems() {
        // Get the cart items from localStorage, or default to an empty array if nothing is found
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Check if the cart is empty
        if (cart.length === 0) {
            // If the cart is empty, display a message in the order summary section
            $('#order-summary').html('<p>Your cart is empty!</p>');
            return; // Exit the function early since there's no need to display anything further
        }

        // Initialize the order summary HTML string and the subtotal variable
        let orderSummaryHtml = '';
        let subtotal = 0;

        // Loop through each item in the cart array
        cart.forEach(item => {
            // Append the HTML for each product in the cart
            orderSummaryHtml += `
                <div class="product-outer">
                    <div class="product-outer-details">
                        <figure class="mb-0">
                            <img src="${item.image}" alt="product-img"> <!-- Display the product image -->
                        </figure>
                        ${item.name} <!-- Display the product name -->
                    </div>
                    <span class="float-right total">${item.price} $</span> <!-- Display the product price -->
                </div>
            `;
            // Add the price of the item to the subtotal (convert it to a number using parseFloat)
            subtotal += parseFloat(item.price);
        });

        // Append the subtotal and total (including shipping) to the order summary
        orderSummaryHtml += `
            <div class="product-outer">
                <span>Subtotal</span> <!-- Label for subtotal -->
                <span class="float-right total">${subtotal.toFixed(2)} $</span> <!-- Display subtotal -->
            </div>
            <div class="shipping-outer">
                <span class="shipping">Total</span> <!-- Label for total -->
                <span class="price">${(subtotal + 9).toFixed(2)} $</span> <!-- Add shipping cost (9 $) to subtotal and display total -->
            </div>
        `;

        // Set the generated HTML as the content of the order-summary div
        $('#order-summary').html(orderSummaryHtml);
    }

    // Load cart items and display the order summary when the page is loaded
    loadCartItems();
});


</script>


@endsection



<div class="col-lg-4 col-md-12 col-12">
    <div class="order-summary-box">
        <h4>Order Summary</h4>
        <div class="preview-box">
            <div class="product-outer">
                <span>Product</span>
                <span class="float-right total">Subtotal</span>
            </div>


        </div>
    </div>

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





