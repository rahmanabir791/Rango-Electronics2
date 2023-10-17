@extends('front.master')
@section('title')
    Search Result
@endsection

@section('body')
    @include('front.includes.navCategoryForOthers')
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Search Result of Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach($productss as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1" >
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}"><img class="img-fluid w-100" src="{{asset($product->image)}}" style="height: 200px;" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}"><h6 class="text-truncate mb-3">{{$product->productName}}</h6></a>
                            <div class="d-flex justify-content-center">
                                <h6>৳{{number_format($product->MRP_price)}}</h6>
                                <h6 class="text-muted ml-2">
                                    <del>৳{{number_format($product->O_price)}}</del>
                                </h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{ route('productDetail' , [ 'id' => $product->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i>View Details</a>
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
    </div>


{{--Installation Service--}}
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Search Result of Installations and Services</span></h2>
        </div>

        @foreach($services as $service)
            @if($service->ServiceCategory == 1)
                <h3>Air Condition</h3>
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><img class="img-fluid w-100" src="{{asset($service->ServiceImage)}}" alt=""></a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><h6 class="text-truncate mb-3">{{$service->ServiceName}}</h6></a>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{ number_format($service->ServicePrice) }}</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary "></i>View Detail</a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $service->id }}" name="id">
                                    <input type="hidden" value="{{ $service->ServiceName }}" name="name">
                                    <input type="hidden" value="{{ asset($service->ServiceImage)}}" name="image">
                                    <input type="hidden" value="{{ $service->ServicePrice }}" name="price">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


        @foreach($services as $service)
            @if($service->ServiceCategory == 2)
                <h3>Refrigerator</h3>
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><img class="img-fluid w-100" src="{{asset($service->ServiceImage)}}" alt=""></a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><h6 class="text-truncate mb-3">{{$service->ServiceName}}</h6></a>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{ number_format($service->ServicePrice) }}</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $service->id }}" name="id">
                                    <input type="hidden" value="{{ $service->ServiceName }}" name="name">
                                    <input type="hidden" value="{{ asset($service->ServiceImage)}}" name="image">
                                    <input type="hidden" value="{{ $service->ServicePrice }}" name="price">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


        @foreach($services as $service)
            @if($service->ServiceCategory == 3)
                <h3>Installation Service</h3>
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><img class="img-fluid w-100" src="{{asset($service->ServiceImage)}}" alt=""></a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><h6 class="text-truncate mb-3">{{$service->ServiceName}}</h6></a>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{ number_format($service->ServicePrice) }}</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $service->id }}" name="id">
                                    <input type="hidden" value="{{ $service->ServiceName }}" name="name">
                                    <input type="hidden" value="{{ asset($service->ServiceImage)}}" name="image">
                                    <input type="hidden" value="{{ $service->ServicePrice }}" name="price">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


        @foreach($services as $service)
            @if($service->ServiceCategory == 4)
                <h3>Others</h3>
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><img class="img-fluid w-100" src="{{asset($service->ServiceImage)}}" alt=""></a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}"><h6 class="text-truncate mb-3">{{$service->ServiceName}}</h6></a>
                                <div class="d-flex justify-content-center">
                                    <h6>৳{{ number_format($service->ServicePrice) }}</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ route('installation.Details' , [ 'id' => $service->id ]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $service->id }}" name="id">
                                    <input type="hidden" value="{{ $service->ServiceName }}" name="name">
                                    <input type="hidden" value="{{ asset($service->ServiceImage)}}" name="image">
                                    <input type="hidden" value="{{ $service->ServicePrice }}" name="price">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    @endif
    @endforeach

@endsection

