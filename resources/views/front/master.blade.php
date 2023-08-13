@include('front.includes.style')

<body>

<!-- Topbar Start -->
@include('front.includes.topbarOne')


@include('front.includes.tobarTwo')
{{--<!-- Topbar End -->--}}


<!-- Navbar Start -->


<!-- Navbar End -->


@yield('body')

<!-- Footer Start -->
{{--@include('front.includes.footer')--}}
<!-- Footer End -->

@include('front.includes.script')
