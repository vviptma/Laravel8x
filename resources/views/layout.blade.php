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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <style>
            .owl-prev {
                width: 25px;
                position: absolute;
                top: 40%;
                margin-left: 10px !important;
                display: block !important;
                border:0px solid black;
            }

            .owl-next {
                width: 25px;
                position: absolute;
                top: 40%;
                right: 5px;
                display: block !important;
                border:0px solid black;
            }
            .owl-prev i, .owl-next i {transform : scale(5,6); color: #ccc;}
            .owl-theme .owl-nav [class*=owl-]:hover{
                background: #00000000;
            }
        </style>
    </head>
    <body>
    <div class="container" >
        <!----- Menu ----->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <!----- Slide ----->
        <h3>SÁCH HAY NÊN ĐỌC</h3>

        <div class="owl-carousel owl-theme mt-5">
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
            <div class="item">
                <img src="{{asset('public/uploads/truyen/conan91.jpg')}}">
                <h5>Conan Tập 1</h5>
                <p><i class="fas fa-eye"></i> 0 lượt xem</p>
            </div>
        </div>
        <!----- SÁCH MỚI CẬP NHẬT ----->
        <h3>SÁCH MỚI CẬP NHẬT</h3>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <?php
                    for($i = 1;$i < 5 ; $i++): ?>
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Detective conan</h5>
                                    <p class="card-text">Truyện conan là truyện hay nhất hệ mặt trời :)</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">0 lượt xem</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
                <a class="btn btn-success" href="">Xem tất cả</a>
            </div>
        </div>

        <!-----SÁCH HAY XEM NHIỀU----->
        <h3>SÁCH HAY XEM NHIỀU</h3>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <?php
                    for($i = 1;$i < 5 ; $i++): ?>
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-text">Detective conan</h5>
                                <p class="card-text">Truyện conan là truyện hay nhất hệ mặt trời :)</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">0 lượt xem</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>

                </div>
                <a class="btn btn-success" href="">Xem tất cả</a>
            </div>
        </div>

        <!-----Blogs----->
        <h3>BLOGS</h3>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <?php
                    for($i = 1;$i < 5 ; $i++): ?>
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-text">Detective conan</h5>
                                <p class="card-text">Truyện conan là truyện hay nhất hệ mặt trời :)</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">0 lượt xem</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>

                </div>
                <a class="btn btn-success" href="">Xem tất cả</a>
            </div>
        </div>

    </div>

    <!-- Get app.js to add Boostrap -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- https://cdnjs.com/libraries/jquery/3.5.0 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" ></script>

    <!-- https://owlcarousel2.github.io/OwlCarousel2/ -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type=text/javascript>
            $('.owl-carousel').owlCarousel({
                loop:true,
                dots:false,
                nav:true,
                margin:10,
                navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
    </body>
</html>
