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
                <button type="button" class="navbar-toggler" style="position: relative;  " data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon fa-solid fa-bars"><i ></i></span>
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

    <div class="col-lg-3">
        <nav class="navbar-collapse active navbar navbar-vertical align-items-start p-0 border border-top-0 border-bottom-0">
            <div class="navbar-nav w-100 overflow-auto">
                <div class="category-bar collapse show category-bar-visible">
                    <div class="category-list">
                        <nav class="navCategory">
                            <ul class="">
                                {{-- Category --}}
                                @foreach($categories as $category)
                                    <li class="dropdown"><a href="{{ route('Category-All', ['id' => $category->id]) }}">{{$category->CategoryName}}<span>&rsaquo;</span></a>
                                        <ul>
                                            {{-- Brands --}}
                                            @php
                                                $categoryBrands = $brands->where('category_id', $category->id);
                                            @endphp

                                            @foreach($categoryBrands as $brand)
                                                <li class="dropdown_two"><a href="{{ route('category.wise.brand', ['id' => $brand->id]) }}">{{$brand->BrandName}}<span>&rsaquo;</span></a>
                                                    <ul>
                                                        {{-- Type Of Products --}}
                                                        @php
                                                            $sameTypeIds = [];
                                                        @endphp

                                                        @foreach ($products as $product)
                                                            @if ($product->category_id == $category->id && $product->brand_id == $brand->id)
                                                                @if (!array_key_exists($product->product_type, $sameTypeIds))
                                                                    @php
                                                                        $sameTypeIds[$product->product_type] = [];
                                                                    @endphp
                                                                @endif
                                                                @php
                                                                    $sameTypeIds[$product->product_type][] = $product->id;
                                                                @endphp
                                                            @endif
                                                        @endforeach

                                                        @foreach ($sameTypeIds as $productType => $ids)
                                                            <li>
                                                                <a href="{{ route('type.of.product', ['ids' => implode(',', $ids)]) }}">{{ $productType }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                {{-- End Category Bar --}}
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
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="height: auto;">
                        <img class="img-fluid" src="{{asset($slider->slidImage)}}" style="border-radius: 20px;"  alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="padding: 15px;">
                            <div class="p-3" style="max-width: 700px; border-radius: 50px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">{{$slider->sliderStext}}</h4>
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
    <div class="col-lg-3">
        <img src="{{asset('/')}}assets/front-asset/img/ad1.jpg" alt="" class="img-fluid d-none d-lg-block" style="height: 200px; width: 420px; border-radius: 20px; margin-bottom: 10px;">
        <img src="{{asset('/')}}assets/front-asset/img/ad2.jpg" alt="" class="img-fluid d-none d-lg-block" style="height: 200px; width: 420px; border-radius: 20px;">
    </div>
</div>
<!-- ... (Your HTML and CSS) ... -->
<div class="row d-block d-lg-none">
    <div class="col-12 mt-1 ">
        <!-- Advertisements for mobile -->
        <img src="{{asset('/')}}assets/front-asset/img/ad1.jpg" alt="" class="img-fluid" style="height: auto; max-width: 100%; border-radius: 20px; margin-bottom: 10px;">
        <img src="{{asset('/')}}assets/front-asset/img/ad2.jpg" alt="" class="img-fluid" style="height: auto; max-width: 100%; border-radius: 20px;">

        <!-- ... (Mobile advertisements code) ... -->
    </div>
</div>


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
        const navToggleButton = document.getElementById("nav-toggle-button");
        const navbarCollapse = document.querySelector(".navbar-collapse");

        navToggleButton.addEventListener("click", function () {
            navbarCollapse.classList.toggle("active");
        });
    });

</script>







