<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comic Books</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<div class="container">
    <!----- Menu ----->
    @yield('menu')
    @yield('ads')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <!----- SLIDE ----->
                @yield('slide')
            <!----- SÁCH MỚI CẬP NHẬT ----->
                @yield('content')
            </div>
            <!----- RIGHT SIDEBAR ----->
            <div class="col-md-4">
                @yield('sidebar')
            </div>
        </div>
    </div>
    @yield('ads')
</div>
@yield('footer')
<!-- Get app.js to add Boostrap -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- https://cdnjs.com/libraries/jquery/3.5.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<!-- https://owlcarousel2.github.io/OwlCarousel2/ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

{{--Js control slide--}}
<script type=text/javascript>
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        autoplayTimeout:500,
        autoplayHoverPause:false,
        loop: true,
        dots: false,
        nav: false,
        margin: 10,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
</body>
</html>
