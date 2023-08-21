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
        </style>

        <div class="container-fluid cart-container">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success mb-3">{{ $message }}</div>
                    @endif
                    <h3 class="text-center mb-4">Your Cart</h3>
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
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" class="form-control text-center quantity-input" >
                                    </form>
                                </td>
                                <td>${{ $item->price }}</td>
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
                    <div class="text-end">
                        <p class="h5">Total: ${{ Cart::getTotal() }}</p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('home.w.l') }}" class="continue-shopping-link">Continue Shopping</a>
                    </div>
                    <div class="text-center mt-3">

                        <a href="{{route('check.out')}}" class="btn btn-success checkout-btn">Confirm Order</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Add event listener to quantity inputs for automatic updates
            const quantityInputs = document.querySelectorAll('.quantity-input');
            quantityInputs.forEach(input => {
                input.addEventListener('change', function () {
                    const form = this.closest('.update-form');
                    form.submit();
                });
            });

            // Update total amount dynamically
            function updateTotal() {
                const totalElement = document.getElementById('total');
                const cartTotal = parseFloat(totalElement.dataset.total);
                const newTotal = cartTotal + parseFloat(this.value) * parseFloat(this.dataset.price);
                totalElement.textContent = `$${newTotal.toFixed(2)}`;
            }

            quantityInputs.forEach(input => {
                input.addEventListener('change', updateTotal);
            });
        </script>
    @endsection


