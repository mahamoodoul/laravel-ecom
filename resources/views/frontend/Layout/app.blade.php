<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- MAIN CSS-->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <!--my responsive-->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!--- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <!--- awl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">


    <title>Home</title>
</head>

<body>





    @include('frontend.Layout.header')
    @include('frontend.Layout.slider')
         @yield('content')


    @include('frontend.Layout.footer')








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"> </script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>


    <!-- My Js-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>