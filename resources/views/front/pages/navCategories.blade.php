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
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.3s ease-in-out; /* Add transition property */
    }

    .category-bar.show {
        max-height: 1000px; /* Adjust the max-height as needed */
        /* ... (Other styles) ... */
    }

    .category-list {
        padding: 10px;
        box-shadow: 2px 1px 3px 1px gold;
    }

    /* Additional styles for the navigation */
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

        .category-bar-visible {
            display: block;
        }

        /* Show the category bar when the button is clicked */
        .category-bar-visible {
            display: block;
        }

        /* Hide the navigation toggle button */
        .navbar-toggler {
            display: none;
        }

        /* Show the navigation menu in mobile view */
        .navbar-collapse {
            display: block !important;
        }

        /* Hide the menu dropdown in mobile view */
        nav ul .dropdown > ul,
        nav ul .dropdown_two > ul {
            display: none !important;
        }

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
                        <span class="text-primary font-weight-bold border px-3 mr-1">Rabgo</span>Electronics
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" style="position: relative" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" style="height: 67px; " id="navbarCollapse">
                    <div class="navbar-nav py-0" style="color: black">
                        <a href="{{route('home')}}" class="nav-item nav-link active" style="color: gold; font-weight: bold; margin-left: 50px;">Home</a>
                        <a href="shop.html" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Shop</a>
                        <a href="detail.html" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: gold; font-weight: bold; margin-left: 50px;">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item" style="color: gold; font-weight: bold;">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item" style="color: gold; font-weight: bold;">Checkout</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Contact</a>
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
                <div class="category-bar  collapse show" >
                    <div class="category-list">
                        <nav class="navCategory" >
                            <ul class="">
                                <li class="dropdown"><a href="#">Television<span>&rsaquo;</span></a>
                                    <ul>
                                        <li class="dropdown_two"><a href="#">Samsung TV<span>&rsaquo;</span></a>
                                            <ul>
                                                <li><a href="#">Samsung LED TV</a></li>
                                                <li><a href="#">Samsung Smart TV</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Sony TV</a></li>
                                        <li><a href="#">LG TV</a></li>
                                        <li><a href="#">Xiaomi Smart TV</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Air conditionar<span>&rsaquo;</span></a>
                                    <ul>
                                        <li class="dropdown_two"><a href="#">Gree<span>&rsaquo;</span></a>
                                            <ul>
                                                <li><a href="#">Gree split type</a></li>
                                                <li><a href="#">Gree window type</a></li>
                                                <li><a href="#">Gree Ceilling type</a></li>
                                                <li><a href="#">Gree Cassette type</a></li>
                                                <li><a href="#">Gree Portable type</a></li>
                                                <li><a href="#">Gree Floor type</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">General</a></li>
                                        <li><a href="#">Sharp</a></li>
                                        <li><a href="#">Maidea</a></li>
                                        <li><a href="#">Daikin</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Water purifier<span>&rsaquo;</span></a>
                                    <ul>
                                        <li><a href="#">Pureit water purifier</a></li>
                                        <li><a href="#">Havells water purifier</a></li>
                                        <li><a href="#">kent water purifier</a></li>
                                        <li><a href="#">China water purifier</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Washing Machine<span>&rsaquo;</span></a>
                                    <ul>
                                        <li><a href="#">Sharp Washing Machine</a></li>
                                        <li><a href="#">LG Washing Machine</a></li>
                                        <li><a href="#">Xiaomi Washing Machine</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Electric Items<span>&rsaquo;</span></a>
                                    <ul>
                                        <li><a href="#">Click</a></li>
                                        <li><a href="#">Ceilling Fan</a></li>
                                        <li><a href="#">XPART TOOLS</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Refrigerators<span>&rsaquo;</span></a>
                                    <ul>
                                        <li><a href="#">Sharp Refrigerator</a></li>
                                        <li><a href="#">Danaz Refrigerator</a></li>
                                        <li><a href="#">Hitachi Refrigerator</a></li>
                                        <li><a href="#">Panasonic Refrigerator</a></li>
                                        <li><a href="#">Konka Refrigerator</a></li>
                                        <li><a href="#">Samsung Refrigerator</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Water heater</a>
                                    <ul>
                                        <li><a href="#">Tropica Geyser</a></li>
                                        <li><a href="#">Havells Geyser</a></li>
                                        <li><a href="#">Tropica Geyser</a></li>
                                        <li><a href="#">DewanCo Geyser</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="col-lg-6">
        <!-- Carousel and Content Here -->
        <div id="header-carousel" class="carousel slide" data-ride="carousel" >
            <!-- ... (Carousel content here) ... -->
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('/')}}assets/front-asset/img/slider.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                {{--                                <a href="" class="btn btn-light py-2 px-3">Shop Now</a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('/')}}assets/front-asset/img/slider.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                {{--                                <a href="" class="btn btn-light py-2 px-3">Shop Now</a>--}}
                            </div>
                        </div>
                    </div>
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
    </div>


    <div class="col-lg-4">
        <img src="{{asset('/')}}assets/front-asset/img/ad1.jpg" alt="" style="height: 200px; width: 400px; margin-bottom: 10px;">
        <img src="{{asset('/')}}assets/front-asset/img/ad2.jpg" alt="" style="height: 200px; width: 400px;">
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

