<style>
    /* Custom styles for the dropdown */
    .category-bar {
        background-color: #fdfdfd;
        color: #050000;
        width: 200px;
        font-size: 12px;
        display: block;
        position: absolute;
        box-shadow: 5px 10px 15px 1px gold;
        z-index: 100; /* Ensure the category bar is above other elements */
        max-height: 0;
        transition: max-height 0.3s ease-in-out; /* Add transition property */
    }

    .category-bar.show {
        max-height: 1000px; /* Adjust the max-height as needed */
        /* ... (Other styles) ... */
    }

    .navbar-collapse .show{
        max-height: 1000px;
    }


    .category-list {
        padding: 10px;
        box-shadow: 2px 1px 3px 1px gold;
    }

    /*Additional styles for the navigation */
    .navCategory {
        top: 0;
        bottom: 0;
        background: rgb(247, 248, 250);

    }




    nav ul {
        position: relative;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    nav ul li {
        position: relative;
        display: block;

    }

    nav ul li a {
        display: flex;
        align-items: center;
        font-size: 1.15em;
        text-decoration: none;
        text-transform: capitalize;
        color: black;
        padding: 10px 15px;
        height: 50px;
        transition: background 0.5s ease;
    }

    nav ul li a:hover {
        background: rgb(225, 226, 230);
        color: black;
    }

    nav ul ul {
        position: absolute;
        left: 100%;
        top: 0;
        display: none;
        width: 250px;
        background: rgb(247, 248, 250);
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    nav ul .dropdown:hover > ul,
    nav ul .dropdown_two:hover > ul {
        display: block;
    }

    nav ul .dropdown,
    nav ul .dropdown_two {
        position: relative;
    }
    .navbar{
        z-index: 100;

    }
    /*.navbar-nav{*/
    /*    background: maroon;*/
    /*    color: white;*/
    /*}*/

    /*.navbar .show {*/
    /*    max-height: 1000px;*/
    /*}*/

    nav ul span {
        position: absolute;
        right: 20px;
        font-size: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
    }

    @media (max-width: 767px) {
        /* Hide the category bar by default */
        .category-bar {
            display: none;
        }


        /* Show the category bar when the button is clicked */
        .category-bar-visible {
            display: block;
        }

        .category-bar .disabled{
            display: none;
        }

        /* Hide the navigation toggle button */
        .navbar-nav{
            display: block;
        }
        .navbar-nav-visible{
            display: block;
            background: maroon;
        }

        .navbar-nav .disabled{
            display: none;
        }

        /*.navbar-nav .navbar-toggler disable{*/
        /*    display: none;*/
        /*}*/
        /*.navbar-toggler disable {*/
        /*    display: none;*/
        /*}*/

        /* Show the navigation menu in mobile view */
        .navbar-nav-visible{
            display: block;

        }
        .navbar-nav  .navbar-collapse {
            display: block !important;
        }

        /* Hide the menu dropdown in mobile view */
        /*nav ul .dropdown > ul,*/
        /*nav ul .dropdown_two > ul {*/
        /*    display: none !important;*/
        /*}*/

        /* Adjust the margin-top of the slider for mobile view */
        #header-carousel {
            margin-top: 50px; /* You can adjust this value as needed */
        }
    }
</style>


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
                <div class="category-bar  collapse " >
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





</div>
{{--<!-- ... (Your HTML and CSS) ... -->--}}

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


script for navbar
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


<!-- Navbar Start -->
{{--<div class="container-fluid">--}}
{{--    <div class="row border-top px-xl-5">--}}
{{--        <div class="col-lg-3 d-none d-lg-block">--}}
{{--            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">--}}
{{--                <h6 class="m-0">Categories</h6>--}}
{{--                <i class="fa fa-angle-down text-dark"></i>--}}
{{--            </a>--}}
{{--            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">--}}
{{--                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">--}}
{{--                    <div class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>--}}
{{--                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">--}}
{{--                            <a href="" class="dropdown-item">Men's Dresses</a>--}}
{{--                            <a href="" class="dropdown-item">Women's Dresses</a>--}}
{{--                            <a href="" class="dropdown-item">Baby's Dresses</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="" class="nav-item nav-link">Shirts</a>--}}
{{--                    <a href="" class="nav-item nav-link">Jeans</a>--}}
{{--                    <a href="" class="nav-item nav-link">Swimwear</a>--}}
{{--                    <a href="" class="nav-item nav-link">Sleepwear</a>--}}
{{--                    <a href="" class="nav-item nav-link">Sportswear</a>--}}
{{--                    <a href="" class="nav-item nav-link">Jumpsuits</a>--}}
{{--                    <a href="" class="nav-item nav-link">Blazers</a>--}}
{{--                    <a href="" class="nav-item nav-link">Jackets</a>--}}
{{--                    <a href="" class="nav-item nav-link">Shoes</a>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--        <div class="col-lg-9">--}}
{{--            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">--}}
{{--                <a href="" class="text-decoration-none d-block d-lg-none">--}}
{{--                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>--}}
{{--                </a>--}}
{{--                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}
{{--                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">--}}
{{--                    <div class="navbar-nav mr-auto py-0">--}}
{{--                        <a href="index.html" class="nav-item nav-link">Home</a>--}}
{{--                        <a href="shop.html" class="nav-item nav-link">Shop</a>--}}
{{--                        <a href="detail.html" class="nav-item nav-link active">Shop Detail</a>--}}
{{--                        <div class="nav-item dropdown">--}}
{{--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>--}}
{{--                            <div class="dropdown-menu rounded-0 m-0">--}}
{{--                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>--}}
{{--                                <a href="checkout.html" class="dropdown-item">Checkout</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a href="contact.html" class="nav-item nav-link">Contact</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Navbar End -->


<!-- Page Header Start -->
<!-- Page Header End -->
