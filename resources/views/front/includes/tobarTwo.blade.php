
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/')}}assets/front-asset/css/tobarTwo.css" rel="stylesheet">

{{-- Second Bar --}}
<nav class="sticky-nav">
    <div class="container-fluid" style="background-color: #800000;">
        <div class="row align-items-center">
            <div class="col-md-3">
                <!-- Logo and Branding -->
                <div class="d-flex justify-content-start align-items-center">
                    <a href="{{route('home.w.l')}}" class="text-decoration-none ml-3">
                        <img style="max-width: 100%;" src="{{asset('/')}}assets/front-asset/img/rongologo.png" alt="Rongo Logo">
                    </a>
                    <a href="{{route('home.w.l')}}" class="text-decoration-none">
                        <img style="max-width: 100%;" src="{{asset('/')}}assets/front-asset/img/rongotext.png" alt="Rongo Text">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Search Form -->
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
            <div class="col-md-3">
                <!-- Navigation Icons and Toggle Button -->
                <div class="d-flex justify-content-center align-items-center">
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
                        {{--                    Cart --}}
                        <a href="{{ route('cart.list') }}" class="text-decoration-none pr-3">
                            <i class="fa-solid fa-cart-flatbed-suitcase" style="color: gold;"></i> {{ Cart::getTotalQuantity()}}
                        </a>

                        {{--                    Cart End--}}
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- Second Bar finished --}}


