<div class="container-fluid text-white mt-5 pt-5" style="background-color: maroon">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
{{--            <a href="" class="text-decoration-none">--}}
{{--                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>--}}
{{--            </a>--}}
            <div class="d-flex justify-content-start align-items-center">
                <a href="{{route('home.w.l')}}" class="text-decoration-none ml-3">
                    <img style="max-width: 90%; margin-bottom: 20px;" src="{{asset('/')}}assets/front-asset/img/rongologo.png" alt="Rongo Logo">
                </a>
                <a href="{{route('home.w.l')}}" class="text-decoration-none">
                    <img style="max-width: 90%;" src="{{asset('/')}}assets/front-asset/img/rongotext.png" alt="Rongo Text">
                </a>

            </div>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3" ></i>House: 5, Road: 12, DIT project, merul badda, Dhaka</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@rangoelectronics.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+017 985 65001</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-white mb-4">Information</h5>
                    <span class="divider" style="color: white"></span>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>How to buy product</a>
                        <a class="text-white mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        <a class="text-white mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>FAQ</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-white mb-4">MY Account</h5>
                    <span class="divider" style="color: white"></span>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Login/Register</a>
                        <a class="text-white mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Order History</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-white mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                   required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-light py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-white">
               <a class="text-white font-weight-semi-bold" style="margin-left: 60px;" href="#">  &copy;rangoelectronics</a> 2023 Designed
                by
                <a class="text-white font-weight-semi-bold" href="#">AN Universe</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid"src="{{asset('/')}}assets/front-asset/img/productimgpayments.png" alt="">
        </div>
    </div>
</div>
