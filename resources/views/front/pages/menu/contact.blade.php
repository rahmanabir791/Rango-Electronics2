@extends('front.master')
@section('title')
    Contact
@endsection

@section('body')
    @include('front.includes.navCategoryForOthers')

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  action="{{'send.message'}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="text" style="border-color: maroon;" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" style="border-color: maroon;" name="email" class="form-control" id="email" placeholder="Your Email" required/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" style="border-color: maroon;" name="subject" class="form-control" id="subject" placeholder="Subject" required/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" style="border-color: maroon;" name="message" rows="6" id="message" placeholder="Message" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-maroon py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">we are Avialable 24/7 for you</h5>

                <div class="d-flex flex-column mb-3">
                    <p class="mb-2 text-dark " style="font-size: 20px;"><i class="fa fa-map-marker-alt mr-3" style=" font-size: 25px; color: maroon; margin-top: 20px;"></i>Address
                        <br> <p class="text-dark" style="margin-left: 35px;">House: 5, Road: 12, DIT project, Merul Badda, Dhaka</p></p>
                    <p class="mb-2 text-dark" style="font-size: 20px;"><i class="fa fa-envelope  mr-3 k" style="color:maroon;"></i>Email <br> <p class="text-dark" style="margin-left: 30px;">info@rangoelectronic.com</p></p>
                    <p class="mb-2 text-dark" style="font-size: 20px;"><i class="fa fa-phone-alt  mr-3" style="color: maroon;"></i>Phone <br> <p class="text-dark" style="margin-left: 25px;">+017 985 65001</p></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
