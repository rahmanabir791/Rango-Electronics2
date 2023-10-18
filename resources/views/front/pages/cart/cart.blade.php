@extends('front.master')

@section('title')
    Cart
@endsection

@section('body')
    <style>
        /* Custom styles */
        body {
            background-color: #f7f7f7;
        }
        .cart-container {
            background-color: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
        }
        .img-thumbnail {
            max-width: 100px;
            max-height: 100px;
        }
        .checkout-btn,
        .continue-shopping-link {
            background-color: #8c1c1c;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .checkout-btn:hover,
        .continue-shopping-link:hover {
            background-color: #5b0f0f;
            color: white;
        }

        /* Style plus and minus buttons */
        .quantity-input-group {
            display: flex;
            align-items: center;
        }
        .quantity-input-group button {
            background-color: #8c1c1c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
            margin: 0 5px;
        }
        .quantity-input-group button:hover {
            background-color: #5b0f0f;
        }
        .quantity-input-group input {
            width: 40px;
            text-align: center;
            font-size: 16px;
        }

        /* Responsive table styles */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
    @include('front.includes.navCategoryForOthers')

    <div class="container-fluid cart-container">
        <div class="row">
            <div class="col-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success mb-3">{{ $message }}</div>
                @endif
                <h3 class="text-center mb-4">Your Cart</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td><img src="{{ $item->attributes->image }}" alt="Thumbnail" class="img-thumbnail"></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form action="{{ route('cart.update') }}" method="POST" class="update-form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <div class="quantity-input-group">
                                            <button type="submit" class="decrease-quantity">-</button>
                                            <input type="number" name="quantity" value="{{ $item->quantity }}" class="form-control text-center quantity-input" data-price="{{ $item->price }}">
                                            <button type="submit" class="increase-quantity">+</button>
                                        </div>
                                    </form>
                                </td>
                                <td class="price-td">৳{{ number_format($item->price) }}</td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button class="btn btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <p class="h5">Total: ৳{{ number_format(Cart::getTotal()) }}</p>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('home.w.l') }}" class="continue-shopping-link">Continue Shopping</a>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('check.out') }}" class="btn btn-success checkout-btn">Confirm Order</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Decrease quantity button click handler
            $('.decrease-quantity').on('click', function() {
                const inputField = $(this).siblings('input.quantity-input');
                const currentValue = parseInt(inputField.val());
                if (currentValue > 1) {
                    inputField.val(currentValue - 1);
                    updateCart(inputField);
                }
            });

            // Increase quantity button click handler
            $('.increase-quantity').on('click', function() {
                const inputField = $(this).siblings('input.quantity-input');
                const currentValue = parseInt(inputField.val());
                inputField.val(currentValue + 1);
                updateCart(inputField);
            });

            // Function to update the cart when quantity changes
            function updateCart(inputField) {
                const form = inputField.closest('form');
                const id = form.find('input[name="id"]').val();
                const quantity = inputField.val();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        quantity: quantity
                    },
                    success: function(data) {
                        // You can update the total or do other actions here
                    },
                    error: function() {
                        // Handle errors here
                    }
                });
            }
        });
    </script>







@endsection
