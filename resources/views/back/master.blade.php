<!DOCTYPE html>
<html lang="en">
<head>
@include('back.include.style')
</head>

<body>
<div class="container-scroller">

    @include('back.include.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     @include('back.include.sidebarmenu')

        @yield('body')

    </div>
    <!-- page-body-wrapper ends -->
</div>
    @include('back.include.footer')
    @include('back.include.js')
</body>

</html>
