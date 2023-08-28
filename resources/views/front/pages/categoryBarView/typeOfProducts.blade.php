@extends('front.master')
@section('title')
    Type of Products
@endsection
@section('body')
    @include('front.includes.navCategoryForOthers')

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            @foreach($categories as $category)
                @foreach($brands as $brand)
                    @if($category->id == $product->category_id)
                        @if($brand->id == $product->brand_id)
            <h2 class="section-title px-5"><span class="px-2">All {{$brand->BrandName}} Brand -> {{$product->product_type}} -> {{$category->CategoryName}} Here</span></h2>
                        @endif
                    @endif
                @endforeach
            @endforeach
        </div>
        <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{asset($product->image)}}"
                                     style="height: 300px; width: 150px;" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{number_format($product->MRP_price)}}</h6>
                                    <h6 class="text-muted ml-2">
                                        <del>৳{{number_format($product->O_price)}}</del>
                                    </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i></a>
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
                </div>
            </div>

@endsection