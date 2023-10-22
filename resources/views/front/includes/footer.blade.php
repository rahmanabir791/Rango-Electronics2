
<style>
    /* Common styles */
    .button {
        padding: 3px;
        border: 1px solid white;
        color: white;
        cursor: pointer;
    }

    .button:hover {
        background-color: white;
        color: black;
    }

    .buttonForIcon {
        color: white;
        font-size: 30px;
        cursor: pointer;
    }

    .buttonForIcon:hover {
        color: cornflowerblue;
    }

    .vl-one, .vl-two {
        border-left: 2px solid gold;
        height: 230px;
        position: absolute;
        top: 0;
    }

    /* Desktop styles */
    @media (min-width: 992px) {
        .vl-one {
            left: 335px;
            margin-left: -10px;
        }

        .vl-two {
            left: 610px;
            margin-left: -3px;
        }

        .ml-6 {
            margin-left: 130px;
        }

        h3 {
            margin-left: 140px;
        }
    }

    /* Tablet styles */
    @media (max-width: 991px) {
        .vl-one, .vl-two {
            display: none; /* Hide vertical lines on smaller screens */

        }

        h3 {
            margin-left: 20px; /* Adjust the margin for headings */
        }
    }

    /* Mobile styles */
    @media (max-width: 767px) {
        .vl-one, .vl-two {
            display: none; /* Hide vertical lines on smaller screens */
        }
        .shop-header{
            width: 100%;


        }
        .widthForCol-md-6inMobileView{
            width: 100%;
        }

        .ForTwoWidth{
            width: 100%;

        }

        .OneM{
            margin-right: 30px;
            margin-left: 50px;
        }
        .TwoM{
            margin-right: 30px;

        }
        .ThreeM{
            margin-left: 20px;
        }
        .FourM{
            margin-left: 10px;
        }
        .OneC{
            margin-right: 20px;

        }

        .centerinmobileview{
            width: 320px;
            margin-left: 40px;
        }
        .centerOne{
            margin-left: 120px;
        }
        .centerTwo{
            margin-left: 20px;
        }
        .centerThree{
            margin-left: 125px;
        }
        .centerFour{
            margin-left: 80px;
        }
        .centerFive{
            margin-left: 120px;
        }
        .centerSix{
            margin-left: 100px;
        }
        .centerSeven{
            margin-left: 120px;
        }


        h3 {
            margin-left: 10px; /* Further adjust the margin for headings */
        }

        .ml-6 {
            margin-left: 10px; /* Adjust margin for smaller screens */
        }

        .buttonForIcon {
            font-size: 20px; /* Reduce font size for smaller screens */
        }

        img {
            max-width: 100%; /* Make images responsive to the screen width */
            height: auto; /* Maintain the image's aspect ratio */
        }
    }

    /* Adjust other styles as needed for smaller screens */
</style>


<div class="container-fluid text-white mt-5 pt-5" style="background-color: darkred">
    <div class="row">
        <div class="col-md-3">
            <h4 class="text-white text-center">Stay Connected</h4>

            <div class="button mb-3" style="border-radius: 50px;">
                <a class="text-color px-2 d-flex align-items-center" href="tel:+8801798565001">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span class="px-2">+8801798-565001</span>
                </a>
            </div>

            <div class="button mb-3" style="border-radius: 50px;">
                <a class="px-2 d-flex align-items-center" href="https://web.facebook.com/messages/t/116086688151121">
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <span class="px-2">Live Chat in Facebook</span>
                </a>
            </div>

            <div class="button mb-3" style="border-radius: 50px;">
                <a class="px-2 d-flex align-items-center" href="mailto:electronics.rango@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="px-2">Email Us</span>
                </a>
            </div>

            <!-- Icons with links -->
            <div class="d-flex mt-3 justify-content-center">
                <a href="https://web.facebook.com/RangoElectronics"><i class="buttonForIcon fa-brands fa-facebook mr-2"></i></a>
                <a href="https://web.facebook.com/messages/t/116086688151121"><i class="buttonForIcon fa-brands fa-facebook-messenger mr-2"></i></a>
                <a href="https://instagram.com/rangoelectronics?utm_source=qr&igshid=MzNlNGNkZWQ4Mg=="><i class="buttonForIcon fa-brands fa-instagram mr-2"></i></a>
                <i class="buttonForIcon fa-brands fa-youtube mr-2"></i>
                <i class="buttonForIcon fa-brands fa-linkedin mr-2"></i>
                <i class="buttonForIcon fa-brands fa-pinterest mr-2"></i>
            </div>

            <div class="vl-one"></div>
        </div>


        <div class="col-md-6 col-12">
            <h4 class="mt-3 shop-header text-center">Shop With Us</h4>

            <div class="d-flex justify-content-center ">
                <div class="">
                    <span class="mb-3 OneM" style="font-size: 14px;">Purchase Procedure</span>
                    <span class="mb-3 TwoM" style="font-size: 14px;">Contact Us</span>
                    <span class="mb-3 ThreeM" style="font-size: 14px;">Contact Service Center</span>
                    <span class="mb-3 FourM" style="font-size: 14px;">Term & Conditions</span>
                </div>
            </div>

            <div class="d-flex justify-content-center flex-wrap ForTwoWidth">
                <span class="mb-3 OneC" style="font-size: 14px;">Why shop at Rango Electronics?</span>
                <span class="mb-3 TwoC" style="font-size: 14px;">Purchase Procedure</span>
                <span class="mb-3 ThreeC" style="font-size: 14px;">Payment Methods</span>
            </div>

            <div class="d-flex justify-content-center flex-column align-items-center">
                <span class="mb-3 d" style="font-size: 14px;">Promotional Offers</span>
                <span class="mb-3 d" style="font-size: 14px;">Privacy Policy</span>
            </div>

            <h3 class="mt-3 text-center " style="margin-left: 3px">Pay with</h3>

            <div class="d-flex justify-content-center centerinmobileview">
                <a href="">
                    <img src="https://www.tvhut.com.bd/image/cache/catalog/AAA-TV-HUT/Emi/ssl-commerz-2line-logo-800px-599x70h.png.webp" alt="" style="max-width: 100%; height: auto;">
                </a>
            </div>

            <div class="vl-two"></div>
        </div>


        <div class="col-md-3">
            <h4 class="centerOne" style="color: goldenrod">Shop Address</h4>
            <p  class="centerTwo" style="font-size: 14px;">House: 5, Road: 12, DIT project, Merul Badda, Dhaka</p>
            <h5  class="centerThree" style="color: goldenrod;">Shop Hour</h5>
            <p  class="centerFour" style="font-size: 14px;">10-8pm | Saturday-Thursday</p>
            <p class="centerFive" style="font-size: 14px; color: red;">Weekend: Tuesday</p>
            <h4 class="centerSix" style="color: darkgoldenrod">Corporate Office</h4>
            <p class="centerSeven" style="font-size: 14px;">Merul Badda, Dhaka</p>
        </div>
    </div>
</div>

<!-- Small footer -->
<div class="col-md-12" style="background-color: maroon; padding: 10px;">
    <p class="text-center text-white">
        <a class="text-white font-weight-semi-bold" href="#">&copy; Copyright</a> 2023 Designed by
        <a class="text-white font-weight-semi-bold" href="#">AN Universe</a>
    </p>
</div>


