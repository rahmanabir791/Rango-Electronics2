@include('front.includes.style')

<body style="overflow-x: hidden;">

<!-- Topbar Start -->
@include('front.includes.topbarOne')


@include('front.includes.tobarTwo')
{{--<!-- Topbar End -->--}}


<!-- Navbar Start -->


<!-- Navbar End -->


@yield('body')
@yield('scriptsCart')

<!-- Footer Start -->
@include('front.includes.footer')
<!-- Footer End -->
@include('front.includes.script')
</body>

</html>
