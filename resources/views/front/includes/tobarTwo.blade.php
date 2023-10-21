
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/')}}assets/front-asset/css/tobarTwo.css" rel="stylesheet">

{{-- Second Bar--}}
    <style>
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Additional styles for mobile responsiveness */
        @media (max-width: 767px) {
            .sticky-nav .col-lg-3 {
                display: none; /* Hide the logo and branding on mobile view */
            }

            .sticky-nav .col-md-12 {
                display: block; /* Display the search bar in mobile view */
            }

            .sticky-nav .col-md-6 .form-inline {
                width: 100%; /* Make the search bar full-width */
            }
        }
    </style>

    <nav class="sticky-nav">
        <div class="container-fluid" style="background-color: #800000;">
            <div class="row align-items-center">
                <!-- Logo and Branding (Hidden on Mobile View) -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="{{ route('home.w.l') }}" class="text-decoration-none ml-3">
                            <img style="max-width: 100%;" src="{{ asset('/assets/front-asset/img/rongologo.png') }}" alt="Rongo Logo">
                        </a>
                        <a href="{{ route('home.w.l') }}" class="text-decoration-none">
                            <img style="max-width: 100%;" src="{{ asset('/assets/front-asset/img/rongotext.png') }}" alt="Rongo Text">
                        </a>
                    </div>
                </div>
                <!-- Search Form -->
                <div class="col-lg-6 d-none d-lg-block ">
                    <form class="form-inline" action="{{ route('search.result') }}" method="GET">
                        @csrf
                        <div class="input-group w-100">
                            <input type="text" name="query" class="form-control" placeholder="Search for products">
                            <div class="input-group-append">
                                <button class="btn bg-danger" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 d-block d-sm-none mt-3">
                    <form class="form-inline" action="{{ route('search.result') }}" method="GET">
                        @csrf
                        <div class="input-group w-100">
                            <input type="text" name="query" class="form-control" placeholder="Search for products">
                            <div class="input-group-append">
                                <button class="btn bg-danger" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Logo and Text (Displayed in Mobile View) -->
                <div class="col-md-6 d-block d-md-none">
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="{{ route('home.w.l') }}" class="text-decoration-none ml-3">
                            <img style="max-width: 100%;" src="{{ asset('/assets/front-asset/img/rongologo.png') }}" alt="Rongo Logo">
                        </a>
                        <a href="{{ route('home.w.l') }}" class="text-decoration-none">
                            <img style="max-width: 100%;" src="{{ asset('/assets/front-asset/img/rongotext.png') }}" alt="Rongo Text">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-block d-md-none">
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <!-- User Information -->
                        <div>
                            @if(optional(Auth::user())->role == 565001)
                                <a href="{{ route('dashboard') }}" class="text-decoration-none pr-3">
                                    <i class="fa-solid fa-user" style="color: gold;">Admin</i> <label for="">{{ explode(' ', Auth::user()->name)[0] }}</label>
                                </a>

                                <a href="#" class="text-decoration-none pr-3" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">
                                    <i class="fa-solid fa-right-from-bracket" style="color: #f3bd29;"></i>
                                </a>
                                <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>
                            @elseif(Auth::check())
                                <a href="{{ route('dashboard') }}" class="text-decoration-none pr-3">
                                    <i class="fa-solid fa-user" style="color: gold;"></i>{{ implode(' ', array_slice(explode(' ', Auth::user()->name), 0, 2)) }}
                                </a>

                                <a href="#" class="text-decoration-none pr-3" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">
                                    <i class="fa-solid fa-right-from-bracket" style="color: #f3bd29;"></i>
                                </a>
                                <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>
                            @else
                                <a href="{{ route('login') }}" class="text-decoration-none pr-3">
                                    <i class="fa-solid fa-user" style="color: gold;"></i>
                                </a>
                            @endif
                        </div>
                        <!-- Cart (Displayed in Mobile View) -->
                        <div>
                            <a href="{{ route('cart.list') }}" class="text-decoration-none pr-3">
                                <i class="fa-solid fa-cart-flatbed-suitcase" style="color: gold;"></i> {{ Cart::getTotalQuantity()}}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- User Name and Cart (Displayed in Mobile View) -->
                <div class="col-lg-3">
                    <div class="d-flex justify-content-center align-items-center mt-3">
                        @if(optional(Auth::user())->role == 565001)
                            <a href="{{ route('dashboard') }}" class="text-decoration-none pr-3">
                                <i class="fa-solid fa-user" style="color: gold;">Admin</i> <label for="">{{ explode(' ', Auth::user()->name)[0] }}</label>
                            </a>

                            <a href="#" class="text-decoration-none pr-3" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">
                                <i class="fa-solid fa-right-from-bracket" style="color: #f3bd29;"></i>
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>

                        @elseif(Auth::check())
                            <a href="{{ route('dashboard') }}" class="text-decoration-none pr-3">
                                <i class="fa-solid fa-user" style="color: gold;"></i>{{ implode(' ', array_slice(explode(' ', Auth::user()->name), 0, 2)) }}
                            </a>

                            <a href="#" class="text-decoration-none pr-3" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">
                                <i class="fa-solid fa-right-from-bracket" style="color: #f3bd29;"></i>
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>

                        @else
                            <a href="{{ route('login') }}" class="text-decoration-none pr-3">
                                <i class="fa-solid fa-user"style="color: gold;"></i>
                            </a>
                        @endif

                        <!-- Cart (Displayed in Mobile View) -->
                        <a href="{{ route('cart.list') }}" class="text-decoration-none pr-3">
                            <i class="fa-solid fa-cart-flatbed-suitcase" style="color: gold;"></i> {{ Cart::getTotalQuantity()}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Second Bar finished--}}


{{--    <nav class="sticky-nav">--}}
{{--        <div class="container-fluid" style="background-color: #800000;">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-md-3 col-6">--}}
{{--                    <!-- Logo and Branding -->--}}
{{--                    <div class="d-flex justify-content-start align-items-center">--}}
{{--                        <a href="{{route('home.w.l')}}" class="text-decoration-none ml-3">--}}
{{--                            <img style="max-width: 100%;" src="{{asset('/')}}assets/front-asset/img/rongologo.png" alt="Rongo Logo">--}}
{{--                        </a>--}}
{{--                        <a href="{{route('home.w.l')}}" class="text-decoration-none">--}}
{{--                            <img style="max-width: 100%;" src="{{asset('/')}}assets/front-asset/img/rongotext.png" alt="Rongo Text">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-6">--}}
{{--                    <!-- Search Form -->--}}
{{--                    <form class="form-inline" action="{{ route('search.result') }}" method="GET">--}}
{{--                        @csrf--}}
{{--                        <div class="input-group w-100">--}}
{{--                            <input type="text" name="query" class="form-control" placeholder="Search for products">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button class="btn bg-danger" type="submit">--}}
{{--                                    <i class="fa fa-search"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <!-- Navigation Icons and Toggle Button -->--}}
{{--                    <div class="d-flex justify-content-center align-items-center">--}}
{{--                        <!-- Your user-related links and cart links here -->--}}
{{--                        @if(optional(Auth::user())->role == 565001)--}}
{{--                            <a href="{{ route('dashboard') }}" class="text-decoration-none pr-3">--}}
{{--                                <i class="fa-solid fa-user" style="color: gold;">Admin</i> <label for="">{{ explode(' ', Auth::user()->name)[0] }}</label>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-decoration-none pr-3" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">--}}
{{--                                <i class="fa-solid fa-right-from-bracket" style="color: #f3bd29;"></i>--}}
{{--                            </a>--}}
{{--                            <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>--}}

{{--                        @elseif(Auth::check())--}}
{{--                            <a href="{{ route('dashboard') }}" class="text-decoration-none pr-3">--}}
{{--                                <i class="fa-solid fa-user" style="color: gold;"></i>{{ implode(' ', array_slice(explode(' ', Auth::user()->name), 0, 2)) }}--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-decoration-none pr-3" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">--}}
{{--                                <i class="fa-solid fa-right-from-bracket" style="color: #f3bd29;"></i>--}}
{{--                            </a>--}}
{{--                            <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>--}}

{{--                        @else--}}
{{--                            <a href="{{ route('login') }}" class="text-decoration-none pr-3">--}}
{{--                                <i class="fa-solid fa-user"style="color: gold;"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                        --}}{{--                                            Cart--}}
{{--                        <a href="{{ route('cart.list') }}" class="text-decoration-none pr-3">--}}
{{--                            <i class="fa-solid fa-cart-flatbed-suitcase" style="color: gold;"></i> {{ Cart::getTotalQuantity()}}--}}
{{--                        </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
