@extends('front.master')
@section('title')
    All Brands
@endsection
@section('body')
    @include('front.includes.navCategoryForOthers')
    <div class="container-fluid pt-2">
        <div class="text-center mb-1">
            <h2 class="section-title px-5"><span class="px-2">All Brands are Here</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
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
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div class=" product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="{{ route('brand.all.products', ['ids' => implode(',', $ids)]) }}" >
                                <img src="{{ asset($brandImages[$brandName]) }}" class="img-fluid" alt="Brand image">
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
@endsection






{{--gf--}}

{{--<a href="{{ route('brand.all.products', ['ids' => implode(',', $ids)]) }}">--}}
{{--    <div class="card product-item border-0 mb-4">--}}
{{--        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--            <img class="img-fluid  w-100" src="{{ asset($brandImages[$brandName]) }}" style="height: 300px; width: 150px;" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--</a>--}}
{{----}}
