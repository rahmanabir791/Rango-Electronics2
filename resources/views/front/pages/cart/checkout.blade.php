@extends('front.master')
@section('title')
    Check Out
@endsection
@section('body')
    <link href="{{asset('/')}}assets/front-asset/css/checkout.css" rel="stylesheet">
    <div class="container-fluid mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Checkout</h2>
                <h5 class="mb-3 animate__animated animate__fadeIn">Order Summary</h5>
                <div class="data-input-form">
                    <form action="{{ route('check.out.submit') }}" method="post" enctype="multipart/form-data">
                        @csrf


                    <!-- Loop through cart items -->
                @foreach ($cartItems as $index => $item)
                    <div class="cart-item animate__animated animate__fadeInUp">
                        <img src="{{ $item->attributes->image }}" alt="Thumbnail" class="img-thumbnail">
                        <div class="cart-item-details">
                            <p class="cart-item-name">{{ $item->name }}</p>
                            <input type="hidden" name="products[{{ $index }}][name]" value="{{ $item->name }}">
                            <label for="quantity">Product Quantity: {{ $item->quantity }}</label>
                            <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $item->quantity }}">
                            <label for="price">Price: {{ $item->price }}</label>
                            <input type="hidden" name="products[{{ $index }}][price]" value="{{ $item->price }}">
                        </div>
                    </div>
                @endforeach



                <!-- Form input section with collected item data -->

                        <!-- Total amount display -->
                        <h4 class="cart-item-price" style="background-color: maroon; color: gold">Total Amount: ৳{{ Cart::getTotal() }}</h4>
                        <input type="hidden" value="{{ Cart::getTotal() }}" name="totalAmount">

                        <!-- Payment method selection -->
                        <div class="form-group">
                            <label>Payment Method</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="p_status" id="cash" value="1" checked>
                                    Pay cash directly
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="p_status" id="advancePaymentOnline" value="0">
                                    Pay in advance online
                                </label>
                            </div>
                        </div>

                    {{-- Start For Online Payment --}}
                    <div id="onlinePaymentSection" style="display: none;">
                            <h4 class="cart-item-price" style="background-color: maroon; color: gold">After Advance Payment Remaining Amount: <label for="remaining_amount" id="remaining_label">৳{{ Cart::getTotal() }}</label></h4>
                            <input type="hidden" name="remainAmount" id="remainAmount" value="">
                            <h4>For Advance Payment Make Payment This number</h4>
                            <h5 style="color: maroon">01800000000</h5>

                            <div class="form-group">
                                <label for="name">Advance Payment Amount</label>
                                <input type="number" class="form-control" id="A_payment" name="A_payment" step="0.01" min="0" oninput="calculateRemainingAmount()">
                            </div>

                            <div class="form-group">
                                <label for="name">Mobile Financial service Provider Name</label>
                                <input type="text" class="form-control" id="f_service" name="f_service">
                            </div>

                            <div class="form-group">
                                <label for="name">Transaction Number</label>
                                <input type="text" class="form-control" id="Transaction_num" name="Transaction_num">
                            </div>
                        </div>
                        {{-- End For Online Payment --}}
                  <div >
                      <hr style="background-color: gold; height: 3px;">
                      <hr style="background-color: gold; height: 5px; width: 350px">
                      <hr style="background-color: gold; height: 3px;">
                  </div>

                        <!-- Repeat for other cart items -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP Code</label>
                            <input type="text" class="form-control" id="zip" name="zip" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Address</label>
                            <textarea name="address" class="form-control" id="" cols="10" rows="3"></textarea>
                        </div>
                    <!-- Rest of the form fields -->
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary checkout-btn animate__animated animate__fadeIn">Place Order</button>
                        <br>
                        <br>
                        <br>
                    </div>
                </form>
                <a href="{{ route('home') }}" class="continue-shopping-link animate__animated animate__fadeIn">Continue Shopping</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var remainingInput = document.getElementById("A_payment");
            var remainAmountInput = document.getElementById("remainAmount");
            var remainingLabel = document.getElementById("remaining_label");

            remainingInput.addEventListener("input", function() {
                calculateRemainingAmount(); // Recalculate remaining amount on input change
            });

            function calculateRemainingAmount() {
                var totalAmount = {{ Cart::getTotal() }};
                var advancePayment = parseFloat(remainingInput.value);

                // Handle the case where the input is empty or NaN
                if (isNaN(advancePayment)) {
                    advancePayment = 0;
                }

                var remainingAmount = totalAmount - advancePayment;

                remainingLabel.textContent = " ৳" + remainingAmount.toFixed(2);
                remainAmountInput.value = remainingAmount.toFixed(2); // Set the input value

                return remainingAmount.toFixed(2); // Return the remaining amount
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            var onlinePaymentSection = document.getElementById("onlinePaymentSection");
            var paymentRadio = document.querySelectorAll('input[name="p_status"]');

            // Add event listeners to radio buttons
            for (var i = 0; i < paymentRadio.length; i++) {
                paymentRadio[i].addEventListener("change", function() {
                    toggleOnlinePayment(this.value);
                });
            }

            function toggleOnlinePayment(paymentValue) {
                if (paymentValue === "0") {
                    onlinePaymentSection.style.display = "block";
                } else {
                    onlinePaymentSection.style.display = "none";
                }
            }
        });
    </script>
@endsection
