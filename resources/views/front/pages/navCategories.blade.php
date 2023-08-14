<style>

    nav{
        position: absolute;
        top: 0;
        bottom: 0;
        background: rgb(247, 248, 250);
    }

    nav ul{
        position: relative;
        list-style-type: none;
    }

    nav ul li a{
        display: flex;
        align-items: center;
        font-size: 1.15em;
        text-decoration: none;
        text-transform: capitalize;
        color: black;
        padding:0px;
        height: 50px;
        transition: .5s ease;
    }

    nav ul li a:hover{
        background: rgb(225, 226, 230);
        color: black;
    }

    nav ul ul{
        position: absolute;
        left: 200px;
        width:250px;
        display: none;
        top: 0;
        background: rgb(247, 248, 250);
    }

    nav ul span{
        position: absolute;
        right: 20px;
        font-size: 1.5rem;
    }

    nav ul .dropdown{
        position: relative;
    }

    nav ul .dropdown:hover > ul{
        display: initial;
    }

    nav ul .dropdown_two ul{
        position: absolute;
        left: 200px;
        top: 0;
    }

    nav ul .dropdown_two:hover ul {
        display: initial;
    }
    /* Custom styles for the dropdown */
    /*.category-bar {*/
    /*    background-color: #fdfdfd;*/
    /*    color: #050000;*/
    /*    width: 200px;*/
    /*    font-size: 15px;*/
    /*    position: absolute;*/
    /*    box-shadow: 10px 10px 5px gold;*/
    /*}*/

    /*.category-list {*/
    /*    padding: 10px;*/
    /*    box-shadow: 5px 3px 3px 1px gold;*/
    /*}*/

    /*.category {*/
    /*    position: relative;*/
    /*}*/

    /*.category a {*/
    /*    text-decoration: none;*/
    /*    color: #0a0000;*/
    /*    font-weight: bold;*/
    /*    display: block;*/
    /*    padding: 5px 0;*/
    /*}*/

    /*.category ul {*/
    /*    list-style: none;*/
    /*    padding: 0;*/
    /*    margin: 0;*/
    /*    display: none;*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: 100%;*/
    /*    background-color: white;*/
    /*    border: 1px solid #ccc;*/
    /*    z-index: 1;*/
    /*}*/

    /*.category:hover ul {*/
    /*    display: block;*/
    /*}*/

    /*.category ul li {*/
    /*    display: block;*/
    /*}*/



    /* Hover effect for subcategory */
    /*.subCategory ul {*/
    /*    display: none;*/
    /*}*/

    /*.subCategory:hover ul {*/
    /*    display: block;*/
    /*}*/

    /*.subCategory a {*/
    /*    color: #333;*/
    /*    display: block;*/
    /*    padding: 5px 0;*/
    /*    text-decoration: none;*/
    /*}*/

    /*.subCategory:hover .childCategory ul {*/
    /*    display: none;*/
    /*}*/

    /*.childCategory ul {*/
    /*    list-style: none;*/
    /*    padding: 0;*/
    /*    margin: 0;*/
    /*    display: none;*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: 100%;*/
    /*    background-color: white;*/
    /*    border: 2px solid #ccc;*/
    /*    z-index: 1;*/
    /*}*/

    /*.childCategory:hover ul {*/
    /*    display: block;*/
    /*}*/

    /*.childCategory a {*/
    /*    color: #333;*/
    /*    display: block;*/
    /*    padding: 10px 0;*/
    /*    text-decoration: none;*/
    /*}*/
</style>

<div class="container-fluid  mb-5 mt-1" style="background-color: #800000; height: 68px">
    <div class="row border-top px-xl-6">
        <div class="col-lg-2">
            <!-- Category Bar -->

            <!-- Category Bar for Desktop View -->
            <a class="btn  d-flex align-items-center justify-content-between text-white w-100"   style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0" style="color: gold">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>

                    <!-- ... (Other category links for desktop view) ... -->
        </div>
        <!-- Rest of the content (Navigation bar, Carousel, etc.) -->

    <div class="col-lg-10">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg   py-3 py-lg-0 px-0" >
            <!-- ... (Existing Navigation Links) ... -->
            <a href="" class="text-decoration-none d-block d-lg-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Rabgo</span>Electronics</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon btn btn-outline-maroon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" style="height: 67px; " id="navbarCollapse" >
                <div class="navbar-nav mr-auto py-0" style="color: black" >
                    <a href="index.html" class="nav-item nav-link active " style="color: gold; font-weight: bold">Home</a>
                    <a href="shop.html" class="nav-item nav-link" style="color: gold; font-weight: bold">Shop</a>
                    <a href="detail.html" class="nav-item nav-link" style="color: gold; font-weight: bold">Shop Detail</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: gold; font-weight: bold">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="cart.html" class="dropdown-item" style="color: gold; font-weight: bold">Shopping Cart</a>
                            <a href="checkout.html" class="dropdown-item" style="color: gold; font-weight: bold">Checkout</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link" style="color: gold; font-weight: bold">Contact</a>
                </div>
            </div>
        </nav>

    </div>
    </div>
</div>




                            <!-- Main Category -->
{{--                            <a href="#" class="nav-link dropdown-toggle  text-left  ">Lorem ipsum dolor <i class="fa fa-angle-down mt-1"></i></a>--}}
{{--                            <!-- Subcategory -->--}}
{{--                            <div class="dropdown-menu subcategory-list">--}}
{{--                                <a href="#" class="dropdown-toggle  ">Subcategory</a>--}}
{{--                                <div class="dropdown-menu ">--}}
{{--                                    <a href="#">Child Category</a>--}}
{{--                                </div>--}}
                            <!-- Default dropright button -->


<div class=" col-lg-12 row">
{{--    <style>--}}
{{--        /* Custom styles for the dropdown */--}}
{{--        .category-bar {--}}
{{--            background-color: #fdfdfd;--}}
{{--            color: #050000;--}}
{{--            width: 200px;--}}
{{--            font-size: 15px;--}}
{{--            box-shadow: 10px 10px 5px #ccc;--}}
{{--        }--}}

{{--        .category-list {--}}
{{--            padding: 10px;--}}
{{--            box-shadow: 5px 3px 3px 1px gold;--}}
{{--        }--}}

{{--        .category {--}}
{{--            position: relative;--}}
{{--        }--}}

{{--        .category a {--}}
{{--            text-decoration: none;--}}
{{--            color: #0a0000;--}}
{{--            font-weight: bold;--}}
{{--            display: block;--}}
{{--            padding: 5px 0;--}}
{{--        }--}}

{{--        .category ul {--}}
{{--            list-style: none;--}}
{{--            padding: 0;--}}
{{--            margin: 0;--}}
{{--            display: none;--}}
{{--            position: absolute;--}}
{{--            top: 0;--}}
{{--            left: 100%;--}}
{{--            background-color: white;--}}
{{--            border: 1px solid #ccc;--}}
{{--            z-index: 1;--}}
{{--        }--}}

{{--        .category:hover ul {--}}
{{--            display: block;--}}
{{--        }--}}

{{--        .category ul li {--}}
{{--            display: block;--}}
{{--        }--}}

{{--        /* Hover effect for subcategory */--}}
{{--        .subCategory ul {--}}
{{--            display: none;--}}
{{--        }--}}

{{--        .subCategory:hover ul {--}}
{{--            display: block;--}}
{{--        }--}}

{{--        .subCategory a {--}}
{{--            color: #333;--}}
{{--            display: block;--}}
{{--            padding: 5px 0;--}}
{{--            text-decoration: none;--}}
{{--        }--}}

{{--        .subCategory:hover .childCategory ul {--}}
{{--            display: none;--}}
{{--        }--}}

{{--        .childCategory ul {--}}
{{--            list-style: none;--}}
{{--            padding: 0;--}}
{{--            margin: 0;--}}
{{--            display: none;--}}
{{--            position: absolute;--}}
{{--            top: 0;--}}
{{--            left: 100%;--}}
{{--            background-color: white;--}}
{{--            border: 1px solid #ccc;--}}
{{--            z-index: 1;--}}
{{--        }--}}

{{--        .childCategory:hover ul {--}}
{{--            display: block;--}}
{{--        }--}}

{{--        .childCategory a {--}}
{{--            color: #333;--}}
{{--            display: block;--}}
{{--            padding: 5px 0;--}}
{{--            text-decoration: none;--}}
{{--        }--}}
{{--    </style>--}}

    <div class="col-lg-2">
        <nav>
            <ul>
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
                        <li><a href="#">DewanCo Geyser<span>&rsaquo;</span></a>
                            <ul>
                                <li class="dropdown_two"><a href="#">dshfsdjfhs</a></li>
                                <li class="dropdown_two"><a href="#">dshfsdjfhs</a></li>
                                <li class="dropdown_two"><a href="#">dshfsdjfhs</a></li>
                                <li class="dropdown_two"><a href="#">dshfsdjfhs</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>






    <div class="col-lg-6">
        <!-- Carousel and Content Here -->
        <div id="header-carousel" class="carousel slide " data-ride="carousel">
            <!-- ... (Carousel content here) ... -->
            <div id="header-carousel" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active " style="height: 410px;">
                        <img class="img-fluid overflow-auto" src="{{asset('/')}}assets/front-asset/img/slider.jpeg" alt="Image">
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

    <div class="col-lg-4 bg-success ">

    </div>
</div>




