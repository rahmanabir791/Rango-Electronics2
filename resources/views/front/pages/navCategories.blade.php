<style>
    /* Custom styles for the dropdown */
    .category-bar {
        background-color: #fdfdfd;
        color: #050000;
        width: 200px;
        font-size: 15px;
        position: absolute;
        box-shadow: 10px 10px 5px gold;
    }

    .category-list {
        padding: 10px;
        box-shadow: 5px 3px 3px 1px gold;
    }

</style>

<div class="container-fluid   mt-1" style="background-color: #800000; height: 68px">
    <div class="row border-top px-xl-6">
        <div class="col-lg-2">
            <!-- Category Bar -->

            <!-- Category Bar for Desktop View -->
            <a class="btn  d-flex align-items-center justify-content-between text-white w-100"  data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
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


    <div class="col-lg-2">
        <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
            <div class="navbar-nav w-100 overflow-auto">
                <div class="category-bar">
                    <div class="category-list">
                        <div class="category">
                            <a href="#">Category</a>
                            <ul class="subCategory">
                                <li class="subCategory">
                                    <a href="#">Subcategory</a>
                                    <ul class="child-category">
                                        <li><a href="#">Child Category</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>






    <div class="col-lg-6">
        <!-- Carousel and Content Here -->
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
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

    <div class="col-lg-4 bg-success ">

    </div>
</div>




