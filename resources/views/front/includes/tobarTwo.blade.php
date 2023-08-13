
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add this style block to your HTML or external CSS file */
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Additional styles for mobile responsiveness */
        @media (max-width: 767px) {
            .sticky-nav .col-md-6 {
                text-align: left;
            }

            .sticky-nav .col-md-6:last-child {
                text-align: right;
            }
        }
    </style>


{{-- Second Bar --}}
<nav class="sticky-nav">
    <div class="container-fluid" style="background-color: #800000;">
        <div class="row align-items-center">
            <div class="col-md-3">
                <!-- Logo and Branding -->
                <div class="d-flex justify-content-start align-items-center">
                    <a href="#" class="text-decoration-none ml-3">
                        <img style="max-width: 100%;" src="{{asset('/')}}assets/front-asset/img/rongologo.png" alt="Rongo Logo">
                    </a>
                    <a href="#" class="text-decoration-none">
                        <img style="max-width: 100%;" src="{{asset('/')}}assets/front-asset/img/rongotext.png" alt="Rongo Text">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Search Form -->
                <form class="form-inline" action="">
                    <div class="input-group w-100">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <button class="btn bg-danger" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <!-- Navigation Icons and Toggle Button -->
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#" class="text-decoration-none pr-3">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="#" class="text-decoration-none pr-3">
                        <i class="fas fa-shopping-cart"> 1</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- Second Bar finished --}}


