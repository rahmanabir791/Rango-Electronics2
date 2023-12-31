@extends('front.master')
@section('title')
  Category All
@endsection
@section('body')
    @include('front.includes.navCategoryForOthers')
    <meta name="keywords" content="{{ $Category->metaKey }} ">
    <meta name="description" content="{{ $Category->Metadescription }} ">
    <meta name="author" content="{{ $Category->focusKey }} ">
    <meta name="robots" content="{{ $Category->metaTag }}">
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">All {{$Category->CategoryName}} Product Here</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach($products as $product)
            @if($Category->id == $product->category_id)
                    <div class="col-lg-3 col-md-6  pb-1">
                        <div class="card product-item border-0 mb-4">
                            <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{asset($product->image)}}" style="height: 200px;" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{number_format($product->O_price)}}</h6>
                                    <h6 class="text-muted ml-2">
                                        <del>৳{{number_format($product->MRP_price)}}</del>
                                    </h6>
                                </div>
                            </div>
                            </a>
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
                <div class="container-fluid text-center">
                    {!! $Category->catDescription  !!}
                </div>
        </div>
        </div>

@endsection

