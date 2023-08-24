@extends('front.master')
@section('title')
    Home
@endsection

@section('body')
@include('front.pages.navtest')

    <!-- Featured Start -->
    <div  class="container-fluid pt-5" style=" padding: 0; " >
        <div class="row ">
            <div class="col-lg-4" >
                    <a href="#"><img class="mb-0 ml-2" src="{{asset('/')}}assets/front-asset/img/banner-1.jpg" style=" margin-left: 2px; height: 303px;" width="405;" alt="image; " ></a>
            </div>
                <div class="col-lg-4 ">
                    <div class="row">
                            <a href="#"><img class="mb-2 ml-2" src="{{asset('/')}}assets/front-asset/img/banner-2.jpg" style="height: 148px;" width="405px;" alt="image"></a>
                            <a href="#"><img class="mb-2 ml-2" src="{{asset('/')}}assets/front-asset/img/banner-3.jpg" style="height: 148px;" width="405px;" alt="image"></a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="row">
                        <a href="#"><img class="mb-2 ml-0 " src="{{asset('/')}}assets/front-asset/img/banner-5.jpg" style="height: 148px;" width="405px;" alt="image"></a>
                        <a href="#"><img class="mb-2 ml-0" src="{{asset('/')}}assets/front-asset/img/banner-3.jpg" style="height: 148px;" width="405px;" alt="image"></a>

                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

{{--Slider Cards --}}

<p class="slider-name text-dark font-weight-bold " >Special Offer Products</p>
<span class="divider"></span>
<p class="view-all"><a href="#">View All ></a></p>
<!--slider row-1 for Special Offer Products -->
<div class="owl-carousel  image-slider">

    @foreach($products as $product)
        @if($product->special_offer == 1)
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <a href="#"><img src="{{asset($product->image)}}" style="height: 300px;" width="150px;" alt="image"></a>
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 ">
                <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                <div class="d-flex justify-content-center">
                    <h6>৳{{$product->O_price}}</h6><h6 class="text-muted ml-2"><del>৳{{$product->MRP_price}}</del></h6>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i>
                        View Detail</a>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->productName }}" name="name">
                        <input type="hidden" value="{{ asset($product->image)}}"  name="image">
                        <input type="hidden" value="{{ $product->O_price }}" name="price">
                        <input type="hidden" value="1" name="quantity">
                        <button type="submit"  class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    @endforeach

</div>



<p class="slider-name text-dark font-weight-bold " >All Products</p>
<span class="divider"></span>
<p class="view-all"><a href="#">View All ></a></p>
<!--slider row-1 for Special Offer Products -->
<div class="owl-carousel  image-slider">
@foreach($products as $product)
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset($product->image)}}" style="height: 300px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
            <div class="d-flex justify-content-center">
                <h6>৳{{$product->O_price}}</h6><h6 class="text-muted ml-2"><del>৳{{$product->MRP_price}}</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i>
                    View Detail</a>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->productName }}" name="name">
                    <input type="hidden" value="{{ asset($product->image)}}"  name="image">
                    <input type="hidden" value="{{ $product->O_price }}" name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button type="submit"  class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
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
<p class="view-all"><a href="#">View All ></a></p>
<div class="owl-carousel  image-slider">

    @foreach($products as $product)
        @if($category->id == $product->category_id)
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <a href="#"><img src="{{asset($product->image)}}" style="height: 300px;" width="150px;" alt="image"></a>
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 ">
                <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                <div class="d-flex justify-content-center">
                    <h6>৳{{$product->O_price}}</h6><h6 class="text-muted ml-2"><del>৳{{$product->MRP_price}}</del></h6>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i>
                        View Detail</a>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->productName }}" name="name">
                        <input type="hidden" value="{{ asset($product->image)}}"  name="image">
                        <input type="hidden" value="{{ $product->O_price }}" name="price">
                        <input type="hidden" value="1" name="quantity">
                        <button type="submit"  class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
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
<div class="owl-carousel owl-theme">
    @php
        $brandImages = [];
    @endphp

    @foreach($brands as $brand)
        @if (!array_key_exists($brand->BrandName, $brandImages))
            @php
                $brandImages[$brand->BrandName] = $brand->BrandImage;
            @endphp
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <p>{{$brand->BrandName}}</p>
                    <a href=""><img src="{{ asset($brand->BrandImage) }}" style="height: 150px;" width="150px;" alt="Brand image"></a>
                </div>
            </div>
        @endif
    @endforeach
</div>
<!--script for last row-->

@endsection
