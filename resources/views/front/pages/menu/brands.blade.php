@extends('front.master')
@section('title')
    All Brands
@endsection
@section('body')
    @include('front.includes.navCategoryForOthers')
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">All Brands are Here</span></h2>
        </div>
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
        <div class="row px-xl-5 pb-3">

                @foreach ($sameBrandIds as $brandName => $ids)
                    <a href="{{ route('brand.all.products', ['ids' => implode(',', $ids)]) }}">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid " src="{{ asset($brandImages[$brandName]) }}" style="height: 300px; width: 250px;" alt="">
                            </div>
                        </div>
                        @endforeach
                    </a>
        </div>
@endsection


