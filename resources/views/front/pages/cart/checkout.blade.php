@extends('front.master')
@section('title')
    Check Out
@endsection
@section('body')

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group label {
            font-weight: bold;
            color: #8c1c1c;
        }
        .form-control {
            border-color: #8c1c1c;
            color: #333;
            background-color: #f8f9fa;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #5b0f0f;
        }
        .btn-primary {
            background-color: #8c1c1c;
            border-color: #8c1c1c;
            color: gold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, border-color 0.3s;
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #5b0f0f;
            border-color: #5b0f0f;
        }
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            animation: fadeInUp 0.5s ease-in-out;
        }
        .cart-item img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 15px;
            border-radius: 5px;
        }
        .cart-item-details {
            flex-grow: 1;
        }
        .cart-item-name {
            font-weight: bold;
            color: #8c1c1c;
            margin-bottom: 5px;
            font-size: 18px;
        }
        .cart-item-price {
            color: #5b0f0f;
            font-size: 16px;
        }
        .checkout-btn,
        .continue-shopping-link {
            background-color: #8c1c1c;
            color: gold;
            padding: 12px 25px;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: inline-block;
            margin-right: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .checkout-btn:hover,
        .continue-shopping-link:hover {
            background-color: #5b0f0f;
            color: white;
        }
    </style>
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Checkout</h2>
                <h5 class="mb-3 animate__animated animate__fadeIn">Order Summary</h5>
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                    @foreach ($cartItems as $item)
                    <div class="cart-item animate__animated animate__fadeInUp">
                            <img src="{{ $item->attributes->image }}" alt="Thumbnail" class="img-thumbnail">
                            <div class="cart-item-details">
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <p class="cart-item-name">{{ $item->name }}</p>
                                <input type="hidden" value="{{ $item->name }}" name="productName">
                                <p class="cart-item-price">Price: ৳{{ $item->price }}</p>
                                <input type="hidden" value="{{ $item->price }}" name="productPrice">
                            </div>
                    </div>
                    @endforeach
                        <h4 class="cart-item-price" style="background-color: maroon; color: gold">Total Amount: ৳{{ Cart::getTotal() }}</h4>
                         <input type="hidden" value="{{ Cart::getTotal() }}" name="totalAmount">

                    <div class="form-group">
                            <div class="form-group">
                                <label>Payment System</label>
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
                        <a href="{{ route('home') }}" class="continue-shopping-link animate__animated animate__fadeIn">Continue Shopping</a>
                    </div>
                </form>
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
