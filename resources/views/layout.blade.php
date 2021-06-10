<?php
$link_icon = 'https://laravel.com/img/favicon/favicon-16x16.png';
$title = 'Comic Books';
$tags = 'Comic Books';
$meta_desc = 'Comic Books';
$meta_keywords = 'Comic Books';
$url_canonical = \URL::current();
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta name="csrf-token" content="{{crsf_token()}}"/>--}}
    <meta name="description" content="{{$meta_desc}}"/>
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{$url_canonical}}" />

    <!-- Meta SEO -->
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{$meta_desc}}"/>
    <meta property="og:image" content="{{$meta_desc}}"/>
    <meta property="og:url" content="{{$meta_desc}}"/>
    <meta property="og:site_name" content="Comic Books"/>
    <link rel="icon" href="{{$link_icon}}" type="image/gif" sizes="16x16">
    <title>{{$title}}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
<div class="container">
    @yield('menu')
    <div class="container">
        @yield('content')
    </div>
    @yield('ads')
    @yield('footer')
</div>
</body>
</html>
