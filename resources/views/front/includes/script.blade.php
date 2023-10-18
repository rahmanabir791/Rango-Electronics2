
<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/front-asset/lib/easing/easing.min.js"></script>


<!-- Contact Javascript File -->
<script src="{{asset('/')}}assets/front-asset/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('/')}}assets/front-asset/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('/')}}assets/front-asset/js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('/')}}assets/front-asset/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}assets/front-asset/lib/owlcarousel/owl.carousel.js"></script>
<script>
    $(document).ready(function (){

        var one = $("#one");
        var two = $("#two");
        var three = $("#three");
        @foreach($categories as $category)
        var four_{{$category->id}} = $("#four_{{$category->id}}");
        @endforeach
        var five = $("#five");
        one.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            dots:false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:8
                }
            }
        })

        two.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            dots:false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        })


        three.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            dots:false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        })
@foreach($categories as $category)
        four_{{$category->id}}.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            dots:false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        })
        @endforeach
        five.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            dots:false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        })
    })

</script>


{{--Toastr--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif
</script>





