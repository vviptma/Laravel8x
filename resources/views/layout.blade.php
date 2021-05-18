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
        #story-detail .infor p i {
            width: 20px;
        }
        #story-detail .infor p {
            margin: 0;
            line-height: 1.5;
            display: flex;
        }

        .card-slide {
            position: relative;
            max-width: 300px;
        }

        .card-img-top-slide {
            display: block;
            width: 100%;
            height: auto;
        }

        .card-body-slide {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity:1;
            color: white;
            padding: 20px;
            text-align: center;
        }
        i.fa, i.fas {
            width: 18px;
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
        autoplayTimeout: 3000,
        autoplayHoverPause:false,
        loop: true,
        dots: false,
        nav: false,
        margin: 15,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
</body>
</html>
