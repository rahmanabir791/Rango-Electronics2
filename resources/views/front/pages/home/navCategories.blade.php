<link href="{{asset('/')}}assets/front-asset/css/navCategories.css" rel="stylesheet">
<div class="container-fluid  mb-1 mt-1" style="background-color: #800000; height: 68px">
    <div class="row border-top px-xl-6">
        <div class="col-lg-2">
            <!-- Category Bar -->

            <!-- Category Bar for Desktop View -->
            <a class="btn d-flex align-items-center justify-content-between text-white w-100 " data-toggle="collapse" data-target="#category-bar"  href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0" style="color: gold">Categories</h6>
                <i class="fa fa-angle-down text-warning "></i>
            </a>
            <!-- ... (Other category links for desktop view) ... -->
        </div>
        <!-- Rest of the content (Navigation bar, Carousel, etc.) -->
        <div class="col-lg-10">
            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
                <!-- ... (Existing Navigation Links) ... -->
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border px-3 mr-1">Rango</span>Electronics
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" style="position: relative; background-color: maroon; " data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center navbar-nav-visible" style="height: 67px; margin-right: 300px;" id="navbarCollapse">
                    <div class="navbar-nav " style="color: black;">
                        <a href="{{route('home')}}" class="nav-item nav-link active" style="color: gold; font-weight: bold; margin-left: 50px;">Home</a>
                        <a href="{{route('All-Brands')}}" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Brands</a>
                        <a href="{{route('menu.installation')}}" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Installation & Services</a>
                        <a href="{{route('menu.contact')}}" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class=" col-lg-12 row">
    <div class="col-lg-2">
        <nav class="  navbar-collapse show navbar navbar-vertical align-items-start p-0 border border-top-0 border-bottom-0"    >
            <div class="navbar-nav w-100 overflow-auto" >
                <div class="category-bar  collapse show category-bar-visible" >
                    <div class="category-list">
                        <nav class="navCategory" >
                            <ul class="">
                                {{--              Category                  --}}
                                @foreach($categories as $category)
                                <li class="dropdown"><a href="{{ route('Category-All', ['id' => $category->id]) }}">{{$category->CategoryName}}<span>&rsaquo;</span></a>
                                    <ul>
                                    {{--                  Brands                      --}}
                                        @foreach($brands as $brand)
                                            @if($category->id == $brand->category_id)
                                        <li class="dropdown_two"><a href="{{ route('category.wise.brand' , ['id' => $brand->id ]) }}">{{$brand->BrandName}}<span>&rsaquo;</span></a>
                                            <ul>
                                        {{--                    Type Of Products                     --}}
                                                @foreach($products as $product)
                                                    @if($product->category_id == $category->id && $product->brand_id == $brand->id)
                                                <li><a href="{{ route('type.of.product' ,[ 'id' => $product->id] ) }}">{{$product->product_type}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>
                                @endforeach
                                {{--                End Category Bar                --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="col-lg-6">
        <!-- Carousel and Content Here -->
        <!-- ... (Carousel content here) ... -->
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="border-radius: 20px;">
                @foreach($sliders as $index =>$slider)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }} " style="height: 410px;">
                        <img class="img-fluid" src="{{asset($slider->slidImage)}}" style="border-radius: 20px;"  alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px; border-radius: 50px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3" >{{$slider->sliderStext}}</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$slider->sliderBtext}}</h3>
                                {{--                                <a href="" class="btn btn-light py-2 px-3">Shop Now</a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4">
        <img src="{{asset('/')}}assets/front-asset/img/ad1.jpg" alt="" style="height: 200px; width: 420px; border-radius: 20px; margin-bottom: 10px;">
        <img src="{{asset('/')}}assets/front-asset/img/ad2.jpg" alt="" style="height: 200px; width: 420px; border-radius: 20px;">
    </div>
</div>
<!-- ... (Your HTML and CSS) ... -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const categoryBar = document.querySelector(".category-bar");
        const categoryButton = document.querySelector("[data-target='#category-bar']");

        categoryButton.addEventListener("click", function () {
            categoryBar.classList.toggle("show"); // Toggle the show class

            // Adjust the max-height of the category bar based on its visibility
            if (categoryBar.classList.contains("show")) {
                categoryBar.style.maxHeight = categoryBar.scrollHeight + "px";
            } else {
                categoryBar.style.maxHeight = "0";
            }
        });
    });
</script>


{{--script for navbar--}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarNav = document.querySelector(".navbar-nav");
        const navButton = document.querySelector("[data-target='#navbarCollapse']");

        navbarNav.addEventListener("click", function () {
            navbarNav.classList.toggle("show"); // Toggle the show class
            // Adjust the max-height of the category bar based on its visibility
            if (navbarNav.classList.contains("show")) {
                navbarNav.style.maxHeight = navbarNav.scrollHeight + "px";
            } else {
                navbarNav.style.maxHeight = "0";
            }
        });
    });
</script>
