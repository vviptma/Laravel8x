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
        .owl-prev {
            width: 25px;
            position: absolute;
            top: 40%;
            margin-left: 10px !important;
            display: block !important;
            border: 0px solid black;
        }

        .owl-next {
            width: 25px;
            position: absolute;
            top: 40%;
            right: 5px;
            display: block !important;
            border: 0px solid black;
        }

        .owl-prev i, .owl-next i {
            transform: scale(5, 6);
            color: #ccc;
        }

        .owl-theme .owl-nav [class*=owl-]:hover {
            background: #00000000;
        }
    </style>
</head>
<body>
<div class="container">
    <!----- Menu ----->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{asset('')}}">COMIC BOOKS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    @yield('ads')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!----- Slide ----->
            @yield('slide')
            <!----- SÁCH MỚI CẬP NHẬT ----->
                @yield('content')
            </div>
            <div class="col-md-4">
                @yield('sidebar')
            </div>
        </div>
    </div>
    @yield('ads')
</div>
<footer class="bd-footer bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
                   aria-label="Bootstrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2"
                         viewBox="0 0 118 94" role="img"><title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                              fill="currentColor"/>
                    </svg>
                    <span class="fs-5">Bootstrap</span>
                </a>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2">Designed and built with all the love in the world by the <a
                            href="/docs/5.0/about/team/">Bootstrap team</a> with the help of <a
                            href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.
                    </li>
                    <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE"
                                                      target="_blank" rel="license noopener">MIT</a>, docs <a
                            href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC
                            BY 3.0</a>.
                    </li>
                    <li class="mb-2">Currently v5.0.1.</li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/docs/5.0/">Docs</a></li>
                    <li class="mb-2"><a href="/docs/5.0/examples/">Examples</a></li>
                    <li class="mb-2"><a href="https://opencollective.com/bootstrap">Themes</a></li>
                    <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
                <h5>Guides</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/docs/5.0/getting-started/">Getting started</a></li>
                    <li class="mb-2"><a href="/docs/5.0/examples/starter-template/">Starter template</a></li>
                    <li class="mb-2"><a href="/docs/5.0/getting-started/webpack/">Webpack</a></li>
                    <li class="mb-2"><a href="/docs/5.0/getting-started/parcel/">Parcel</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
                <h5>Projects</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Bootstrap 5</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Bootstrap 4</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/icons">Icons</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/rfs">RFS</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">npm starter</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
                <h5>Community</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Discussions</a></li>
                    <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                    <li class="mb-2"><a href="https://opencollective.com/bootstrap">Open Collective</a></li>
                    <li class="mb-2"><a href="https://bootstrap-slack.herokuapp.com/">Slack</a></li>
                    <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5">Stack Overflow</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Get app.js to add Boostrap -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- https://cdnjs.com/libraries/jquery/3.5.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<!-- https://owlcarousel2.github.io/OwlCarousel2/ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type=text/javascript>
    $('.owl-carousel').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
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
