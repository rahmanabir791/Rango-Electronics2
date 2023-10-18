<style>
    /* Hide overflow and set max-height */
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
    nav ul {
        position: relative;
        list-style: none;
        padding: 0;
        margin: 0;
        z-index: 1000;
    }

    nav ul li {
        position: relative;
        display: block;
        z-index: 1000;
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
        z-index: 1000;
    }

    nav ul li a:hover {
        background: rgb(225, 226, 230);
        color: black;
        z-index: 1000;
    }

    nav ul ul {
        position: absolute;
        left: 100%;
        top: 0;
        display: none;
        width: 200px;
        background: rgb(247, 248, 250);
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    nav ul .dropdown:hover > ul,
    nav ul .dropdown_two:hover > ul {
        display: block;
        z-index: 1000;
    }

    nav ul .dropdown,
    nav ul .dropdown_two {
        position: relative;
        z-index: 1000;
    }
    .navbar{
        z-index: 100;

    }
    nav ul span {
        position: absolute;
        right: 20px;
        font-size: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
</style>

<div class="container-fluid" style="max-width: 100%;">
    <div class="row border-top">
        <div class="col-lg-3 col-md-4 d-none d-md-block" style="background-color: maroon;" >
            <!-- ... Existing code ... -->
            <a class="btn shadow-none d-flex align-items-center justify-content-between  w-100" data-toggle="collapse"  href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h4 class="m-0" style="color: gold">Categories</h4>
            </a>
        </div>
        <div class="col-lg-9 col-md-8" style="background-color: maroon;">
            <!-- ... Existing content ... -->

            <!-- Add Bootstrap CSS -->


            <!-- Add jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Add Bootstrap JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-0" style="background-color: maroon;">
                <!-- ... Existing code ... -->
                <a href="" class="text-decoration-none d-block d-md-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">Menu</h1>

                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link active" style="color: gold; font-weight: bold; margin-left: 50px;">Home</a>
                        <a href="{{route('All-Brands')}}" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Brands</a>
                        <a href="{{route('menu.installation')}}" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Installation & Services</a>
                        <a href="{{route('menu.contact')}}" class="nav-item nav-link" style="color: gold; font-weight: bold; margin-left: 50px;">Contact</a>
                    </div>
                </div>

                <a href="" class="text-decoration-none d-block d-md-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">Categories</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-vertical2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

            <!-- ... Existing content ... -->
            <nav class="collapse navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical2" >
                <div class="navbar-nav w-100 overflow">
                    <!-- ... Existing category links ... -->
                    <ul class="navbar-nav">
                        @foreach($categories as $category)
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown{{ $category->id }}" data-toggle="dropdown">
                                    {{ $category->CategoryName }}
                                </a>
                                <div class="dropdown-menu">
                                    {{-- Brands --}}
                                    @php
                                        $categoryBrands = $brands->where('category_id', $category->id);
                                    @endphp
                                    @foreach($categoryBrands as $brand)
                                        <a class="dropdown-item" href="{{ route('category.wise.brand', ['id' => $brand->id]) }}">{{ $brand->BrandName }}</a>
                                        {{-- Type Of Products --}}
                                        <ul class="dropdown-menu">
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
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="productTypeDropdown{{ $productType }}" data-toggle="dropdown">
                                                        {{ $productType }}
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        @foreach ($ids as $productId)
                                                            <a class="dropdown-item" href="{{ route('type.of.product', ['ids' => implode(',', $ids)]) }}">Product ID: {{ $productId }}</a>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 d-none d-md-block px-1 mt-1">
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow">
                    <!-- Existing category links -->
                    <ul class="border" style="font-size: 10px; font-weight: bold;">
                        {{-- Category --}}
                        @foreach($categories as $category)
                            <li class="dropdown border">
                                <a href="{{ route('Category-All', ['id' => $category->id]) }}">
                                    {{ $category->CategoryName }}<span>&rsaquo;</span>
                                </a>
                                <ul>
                                    {{-- Brands --}}
                                    @php
                                        $categoryBrands = $brands->where('category_id', $category->id);
                                    @endphp
                                    @foreach($categoryBrands as $brand)
                                        <li class="dropdown_two border">
                                            <a href="{{ route('category.wise.brand', ['id' => $brand->id]) }}">
                                                {{ $brand->BrandName }}<span>&rsaquo;</span>
                                            </a>
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
                                                    <li class="border">
                                                        <a href="{{ route('type.of.product', ['ids' => implode(',', $ids)]) }}">
                                                            {{ $productType }}
                                                        </a>
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
                </div>
            </nav>
        </div>
        <div class="col-lg-10 mt-1">
            <div class="row">
                <div class="col-lg-9 col-md-12 px-0">
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Existing carousel items -->
                            @foreach($sliders as $index => $slider)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    @if($index === 0)
                                        <img class="img-fluid" src="{{ asset($slider->slidImage) }}" style="height: 420px; width: 100%;" alt="Image">
                                    @else
                                        <img class="img-fluid" data-src="{{ asset($slider->slidImage) }}" style="height: 420px; width: 100%;" alt="Image">
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- Existing carousel controls -->
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
                <div class="col-lg-3 d-none d-lg-block">
                    <img src="{{ asset('assets/front-asset/img/Side-pic1.png') }}" alt="" class="img-fluid" style="height: 205px;  width: 100%; margin-bottom: 10px;">
                    <img src="{{ asset('assets/front-asset/img/Side-pic2.png') }}" alt="" class="img-fluid" style="height: 205px; width: 100%;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-1 d-none d-lg-block">
                    <img src="{{ asset('assets/front-asset/img/Slider-down-pic.png') }}" alt="" class="img-fluid" style="height: auto; width: 100%;">
                </div>
            </div>
        </div>

    </div>
</div>

</div>
    <!-- ad3 -->


</div>
<!-- Add the following script at the end of your HTML, just before the closing </body> tag -->


<!-- JavaScript using jQuery -->
<script>
    $(document).ready(function() {
        // Function to close the mobile menus
        function closeMobileMenus() {
            $(".navbar-collapse.show").removeClass("show");
        }

        // Toggle the first menu
        $("#navbarCollapse button.navbar-toggler").click(function() {
            closeMobileMenus();
        });

        // Toggle the second menu
        $("#navbar-vertical2 button.navbar-toggler").click(function() {
            closeMobileMenus();
        });

        // Close the menus when clicking outside of them
        $(document).on("click touchstart", function(event) {
            if (!$(event.target).closest(".navbar-collapse").length && !$(event.target).closest(".navbar-toggler").length) {
                closeMobileMenus();
            }
        });

        // Prevent menu click from closing itself
        $(".navbar-collapse").click(function(event){
            event.stopPropagation();
        });
    });

</script>


<script>
    $(document).ready(function() {
        // When the document is ready

        // Find all images with the data-src attribute
        $('img[data-src]').each(function() {
            // Load the image from the data-src attribute
            $(this).attr('src', $(this).attr('data-src'));

            // Once the image is loaded, remove the data-src attribute
            $(this).on('load', function() {
                $(this).removeAttr('data-src');
            });
        });
    });
</script>
