@extends('front.master')
@section('title')
    Home
@endsection

@section('body')
@include('front.pages.navCategories')

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    .image-slider .owl-nav button{
        position: absolute;
        background: green !important;
        margin-left: 20px;
        height: 30%;
        font-size: 62px !important;
        color: #FFFFFF;
        overflow: hidden;
        z-index: 100;
    }
    .image-slider .owl-nav .owl-prev {
     left: 0px;
     top: 35px;
    }

</style>
<h1 class="text-center " style="background-color: maroon; color: lightyellow" >All Products</h1>
<!--slider row-1 -->
<section class="image-wraper">
<div class="owl-carousel owl-theme">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-1.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark "><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="200px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Women dress </h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-3.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">baby Dress</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-4.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Sony Camera</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>



    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-5.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Stylist bag</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href=""><img src="{{asset('/')}}assets/front-asset/img/cat-6.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Smart Shoe</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-1.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Short Dress</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Smart baby dresses</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-3.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Winter Dresses</h6>
            <div class="d-flex justify-content-center">--}}
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-4.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Shocs</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>
</div>
</section>

<!--slider row-2-->
<h1 class="text-center bg-primary text-white">Category wise product</h1>
<div class="owl-carousel owl-theme image-slider">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-1.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark "><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Women dress </h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-3.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">baby Dress</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-4.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Sony Camera</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>



    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-5.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Stylist bag</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href=""><img src="{{asset('/')}}assets/front-asset/img/cat-6.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Smart Shoe</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-1.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Short Dress</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Smart baby dresses</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-3.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Winter Dresses</h6>
            <div class="d-flex justify-content-center">--}}
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/product-4.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 ">
            <h6 class="text-truncate mb-3">Shocs</h6>
            <div class="d-flex justify-content-center">
                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center bg-danger">Brands</h1>
<!--last row-->
<div class="owl-carousel owl-theme">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-1.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>


    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="#"><img src="{{asset('/')}}assets/front-asset/img/cat-2.jpg" style="height: 150px;" width="150px;" alt="image"></a>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<!--script for last row-->



<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>


{{--Slider Cards End--}}


{{--    <!-- Offer Start -->--}}
{{--    <div class="container-fluid offer pt-5">--}}
{{--        <div class="row px-xl-5">--}}
{{--            <div class="col-md-6 pb-4">--}}
{{--                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">--}}
{{--                    <img src="{{asset('/')}}assets/front-asset/img/productimgoffer-1.png" alt="">--}}
{{--                    <div class="position-relative" style="z-index: 1;">--}}
{{--                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>--}}
{{--                        <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>--}}
{{--                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 pb-4">--}}
{{--                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">--}}
{{--                    <img src="{{asset('/')}}assets/front-asset/img/productimgoffer-2.png" alt="">--}}
{{--                    <div class="position-relative" style="z-index: 1;">--}}
{{--                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>--}}
{{--                        <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>--}}
{{--                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Offer End -->--}}


{{--    <!-- Products Start -->--}}
{{--    <div class="container-fluid pt-5">--}}
{{--        <div class="text-center mb-4">--}}
{{--            <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>--}}
{{--        </div>--}}
{{--        <div class="row px-xl-5 ">--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100" src="{{asset('/')}}assets/front-asset/img/product-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100" src="{{asset('/')}}assets/front-asset/img/product-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100" src="{{asset('/')}}assets/front-asset/img/product-4.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100" src="{{asset('/')}}assets/front-asset/img/product-5.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-6.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-7.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-8.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Products End -->--}}


{{--    <!-- Subscribe Start -->--}}
{{--    <div class="container-fluid bg-secondary my-5">--}}
{{--        <div class="row justify-content-md-center py-5 px-xl-5">--}}
{{--            <div class="col-md-6 col-12 py-5">--}}
{{--                <div class="text-center mb-2 pb-2">--}}
{{--                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>--}}
{{--                    <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>--}}
{{--                </div>--}}
{{--                <form action="">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-primary px-4">Subscribe</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Subscribe End -->--}}


{{--    <!-- Products Start -->--}}
{{--    <div class="container-fluid pt-5">--}}
{{--        <div class="text-center mb-4">--}}
{{--            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>--}}
{{--        </div>--}}
{{--        <div class="row px-xl-5 ">--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-4.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-5.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-6.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-7.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="card product-item border-0 mb-4">--}}
{{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
{{--                        <img class="img-fluid w-100"src="{{asset('/')}}assets/front-asset/img/product-8.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-left border-right text-center p-0 pt-4 ">--}}
{{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
{{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Products End -->--}}


{{--    <!-- Vendor Start -->--}}
{{--    <div class="container-fluid py-5">--}}
{{--        <div class="row px-xl-5">--}}
{{--            <div class="col">--}}
{{--                <div class="owl-carousel vendor-carousel">--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-4.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-5.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-6.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-7.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="vendor-item border p-4">--}}
{{--                        <img src="{{asset('/')}}assets/front-asset/img/productimgvendor-8.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Vendor End -->--}}

@endsection
