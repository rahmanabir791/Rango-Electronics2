@extends('front.master')
@section('title')
    Home
@endsection

@section('body')
    @include('front.pages.home.navtest')

    <p class="slider-name text-dark font-weight-bold ">Category</p>
    <span class="divider"></span>
    <style>
        .owl-carousel .owl-item img {
            max-width: 100%;
            width: auto;
        }

    </style>
    <!--slider row-1 for Special Offer Products -->
    <div class="owl-carousel  image-slider" id="one">
        @foreach($categories as $category)
            @if($category->CategoryImage)
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="{{ route('Category-All' , [ 'id' => $category->id ]) }}"><img src="{{asset($category->CategoryImage)}}" style="height: 150px; " alt="image"></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 ">
                    <a href="{{ route('Category-All' , [ 'id' => $category->id ]) }}"> <h6 class="text-truncate mb-3">{{$category->CategoryName}}</h6></a>

                    <div class="border">

                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <p class="slider-name text-dark font-weight-bold ">Special Offer Products</p>
    <span class="divider"></span>
    <p class="view-all"><a href="{{ route('Special-seeAll') }}">View All ></a></p>
    <!--slider row-1 for Special Offer Products -->



    <div class="owl-carousel image-slider" id="product-carousel"></div>

    <script>
        $(document).ready(function() {
            // Get the container element
            var productContainer = $("#product-carousel");

            // Loop through the products
            @foreach($products as $product)
            @if($product->special_offer == 1)
            var productCard = `
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <a href="{{ route('productDetail', ['id' => $product->id ]) }}">
                            <img src="{{ asset($product->image) }}" style="height: 300px;" alt="image">
                        </a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4">
                        <a href="{{ route('productDetail', ['id' => $product->id ]) }}">
                            <h6 class="text-truncate mb-3">{{ $product->productName }}</h6>
                        </a>
                        <div class="d-flex justify-content-center">
                            <h6>৳{{ number_format($product->O_price) }}</h6>
                            <h6 class="text-muted ml-2">
                                <del>৳{{ number_format($product->MRP_price) }}</del>
                            </h6>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{ route('productDetail', ['id' => $product->id ]) }}"
                               class="btn btn-sm text-dark p-0">
                                <i class="fas fa-eye text-primary"></i> View Detail
                            </a>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->productName }}">
                                <input type="hidden" name="image" value="{{ asset($product->image) }}">
                                <input type="hidden" name="price" value="{{ $product->O_price }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-sm text-dark p-0">
                                    <i class="fas fa-shopping-cart text-primary mr-1"></i> Add To Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            `;

            // Append the product card to the container
            productContainer.append(productCard);
            @endif
            @endforeach
        });
    </script>




    <p class="slider-name text-dark font-weight-bold ">All Products</p>
    <span class="divider"></span>
    <p class="view-all"><a href="{{ route('AllProduct-seeAll') }}">View All ></a></p>
    <!--slider row-1 for Special Offer Products -->
    <div class="owl-carousel  image-slider" id="three">
        @foreach($products as $product)
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}"><img src="{{asset($product->image)}}" style="height: 300px; " alt="image"></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 ">
                    <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}"> <h6 class="text-truncate mb-3">{{$product->productName}}</h6></a>
                    <div class="d-flex justify-content-center">
                        <h6>৳{{number_format($product->O_price)}}</h6>
                        <h6 class="text-muted ml-2">
                            <del>৳{{number_format($product->MRP_price) }}</del>
                        </h6>
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
            </div>
        @endforeach
    </div>



    @foreach($categories as $category)

        <!--slider row-2-->
        <p class="slider-name text-dark font-weight-bold">{{$category->CategoryName}}</p>
        <span class="divider"></span>
        <p class="view-all"><a href="{{ route('Category-seeAll', ['id' => $category->id]) }}">View All></a></p>
        <div class="owl-carousel  image-slider" id="four_{{$category->id}}">

            @foreach($products as $product)
                @if($category->id == $product->category_id)
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}"><img src="{{asset($product->image)}} " style="height: 300px;" alt="image"></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 ">
                            <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}"> <h6 class="text-truncate mb-3">{{$product->productName}}</h6></a>
                            <div class="d-flex justify-content-center">
                                <h6>৳{{number_format($product->O_price)}}</h6>
                                <h6 class="text-muted ml-2">
                                    <del>৳{{number_format($product->MRP_price) }}</del>
                                </h6>
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
                    </div>
                @endif
            @endforeach

        </div>
    @endforeach



    <h1 class="text-center bg-danger">Brands</h1>
    <!--last row-->
    <div class="owl-carousel image-slider " id="five">

        @php
            $sameBrandIds = [];
            $brandImages = [];

            foreach ($brands as $brand) {
                if (!in_array($brand->BrandName, array_keys($sameBrandIds))) {
                    $sameBrandIds[$brand->BrandName] = [$brand->id];
                    $brandImages[$brand->BrandName] = $brand->BrandImage;
                } else {
                    $sameBrandIds[$brand->BrandName][] = $brand->id;
                }
            }
        @endphp

        @foreach ($sameBrandIds as $brandName => $ids)
            @if($brandImages[$brandName])
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <p>{{ $brandName }}</p>
                    <a href="{{ route('brand.all.products', ['ids' => implode(',', $ids)]) }}">
                        <img src="{{ asset($brandImages[$brandName]) }}" style="height: 150px;" width="150px;"
                             alt="Brand image">
                    </a>
                </div>
            </div>
            @endif
        @endforeach

    </div>
    <!--script for last row-->

    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3651.2766210342043!2d90.426187!3d23.773162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDQ2JzIzLjQiTiA5MMKwMjUnMzQuMyJF!5e0!3m2!1sen!2sbd!4v1693077221396!5m2!1sen!2sbd" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

    </iframe>

{{--    <div class="subscription-section bg-light py-4">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center align-items-center">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h4 class="subscription-title mb-0" style="padding: 5px;">Join Us To Get A Special Gift</h4>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <form class="subscription-form">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="email" class="form-control" placeholder="Enter Your Email" aria-label="Email" aria-describedby="subscribe-button" style="border-radius: 20px; margin-right: 10px; font-size: 20px; border-color: maroon;">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button class="btn btn-subscribe" style="background-color: maroon; color: gold; border-radius: 20px; " type="submit">Subscribe</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            let products = <?php echo json_encode($products); ?>;
            let currentProductIndex = 0;

            // Preload all images
            function preloadImages() {
                for (let i = 0; i < products.length; i++) {
                    let img = new Image();
                    img.src = products[i].image;
                }
            }

            preloadImages();

            function showCurrentProduct() {
                $('.product-card').addClass('hidden');
                let productCard = $('.product-card:eq(' + currentProductIndex + ')');
                productCard.find('img').attr('src', products[currentProductIndex].image);
                productCard.removeClass('hidden');
            }

            showCurrentProduct();

            function nextProduct() {
                currentProductIndex++;
                if (currentProductIndex >= $('.product-card').length) {
                    currentProductIndex = 0;
                }
                showCurrentProduct();
            }

            function prevProduct() {
                currentProductIndex--;
                if (currentProductIndex < 0) {
                    currentProductIndex = $('.product-card').length - 1;
                }
                showCurrentProduct();
            }

            $('#nextProduct').click(nextProduct);
            $('#prevProduct').click(prevProduct);
        });
    </script>



@endsection
