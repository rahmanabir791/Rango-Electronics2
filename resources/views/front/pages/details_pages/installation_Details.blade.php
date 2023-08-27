@extends('front.master')
@section('title')
    Installation Details
@endsection
@section('body')
    <!-- Page Header Start -->
    @include('front.includes.navCategoryForOthers')
    <hr style=" background-color: maroon">
    <div class="container-fluid py-3" style="color: black">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel"   >
                    <div class="carousel-inner border" style="border-color: maroon;" >
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{asset($service->ServiceImage)}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{ $service->ServiceName }}</h3>
                <br>
                <h5 class="font-weight-semi-bold mb-4" style="color: maroon;"> Price: ৳{{number_format($service->ServicePrice)}} </h5>

                <p class="mb-4">{!! $service->description !!}</p>


                <div class="d-flex align-items-center mb-4 pt-2">
                    @if (count($cartItems) === 0)
                        <!-- Display the "Add to Cart" section for products not in the cart -->
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-maroon btn-minus" type="button">
                                        <i class="fa fa-minus" style="color: gold;"></i>
                                    </button>
                                </div>
                                <input type="number" class="form-control bg-secondary text-center" name="quantity" value="0">
                                <div class="input-group-append">
                                    <button class="btn btn-maroon btn-plus" type="button">
                                        <i class="fa fa-plus" style="color: gold;"></i>
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $service->id }}" name="id">
                            <input type="hidden" value="{{ $service->ServiceName }}" name="name">
                            <input type="hidden" value="{{ asset($service->ServiceImage)}}" name="image">
                            <input type="hidden" value="{{ $service->ServicePrice }}" name="price">
                            <button type="submit" class="btn btn-maroon px-3" style="color: gold;"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                        </form>
                    @endif

                    @foreach ($cartItems as $item)
                        <!-- Display the cart items and their respective forms -->
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-maroon btn-minus" type="button">
                                        <i class="fa fa-minus" style="color: gold;"></i>
                                    </button>
                                </div>
                                <input type="number" class="form-control bg-secondary text-center" name="quantity" value="0">
                                <div class="input-group-append">
                                    <button class="btn btn-maroon btn-plus" type="button">
                                        <i class="fa fa-plus" style="color: gold;"></i>
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->ServiceName }}" name="name">
                            <input type="hidden" value="{{ asset($product->ServiceImage)}}" name="image">
                            <input type="hidden" value="{{ $product->ServicePrice }}" name="price">
                            <button type="submit" class="btn btn-maroon px-3" style="color: gold; background-color: maroon"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                        </form>
                    @endforeach
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="https://www.linkedin.com/shareArticle?url={{ urlencode(request()->fullUrl()) }}">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="http://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rest of your code remains the same -->
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Specifications</a>
            </div>
            <div class="tab-content text-center" >
                <div class="tab-pane fade show active " style="color: black;" id="tab-pane-1">
                    <h4 class="mb-3">Product Specifications</h4>
                    <p>{!! $service->specification !!}</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Shop Detail End -->

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May know Other Products</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel image-slider">
                    @foreach($products as $product)
                        <div class="card product-item border-0">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{asset($product->image)}}"  style="height: 300px;  width: 150px;" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{number_format($product->O_price)}}</h6><h6 class="text-muted ml-2"><del>৳{{ number_format($product->MRP_price) }}
                                        </del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i>View Detail</a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->productName }}" name="name">
                                    <input type="hidden" value="{{ asset($product->image)}}" name="image">
                                    <input type="hidden" value="{{ $product->O_price }}" name="price">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const minusButtons = document.querySelectorAll(".btn-minus");
            const plusButtons = document.querySelectorAll(".btn-plus");
            const quantityInputs = document.querySelectorAll(".quantity input[name='quantity']");

            minusButtons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    if (quantityInputs[index].value > 0) {
                        quantityInputs[index].value--;
                    }
                });
            });

            plusButtons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    quantityInputs[index].value++;
                });
            });
        });
    </script>
@endsection

