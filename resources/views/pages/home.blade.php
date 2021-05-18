@extends('../layout')
@section('ads')
    @include('pages.ads')
@endsection
@section('slide')
    @include('pages.slide')
@endsection
@section('menu')
    @include('pages.menu')
@endsection
@section('content')
    <h3>SÁCH MỚI CẬP NHẬT</h3>
    <div class="album bg-light">
        <div class="">

            <div class="row">
                @foreach($dstruyenmoi as $key => $truyen)
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
                                <img class="card-img-top"
                                     src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}"></a>
                            <div class="card-body">
                                <h5 class="card-text"><a
                                        href="{{url('truyen/'.$truyen->slug_truyen)}}">{{$truyen->tentruyen}}</a>
                                </h5>
                                <small class="card-text">{{$truyen->danhmuctruyen->tendanhmuc}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="btn btn-success" href="">Xem tất cả</a>
        </div>
    </div>

    <!-----SÁCH HAY XEM NHIỀU----->
    <h3>SÁCH HAY XEM NHIỀU</h3>
    <div class="album bg-light">
        <div class="">

            <div class="row">
                <?php
                for($i = 1;$i < 5 ; $i++): ?>
                <div class="col-md-3">
                    <div class="card mb-3 box-shadow">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-text">Detective conan</h5>
                            <p class="card-text">Truyện conan là truyện hay nhất hệ mặt trời :)</p>
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
    <div class="album bg-light">
        <div class="">

            <div class="row">
                <?php
                for($i = 1;$i < 5 ; $i++): ?>
                <div class="col-md-3">
                    <div class="card mb-3 box-shadow">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-text">Detective conan</h5>
                            <p class="card-text">Truyện conan là truyện hay nhất hệ mặt trời :)</p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>

            </div>
            <a class="btn btn-success" href="">Xem tất cả</a>
        </div>
    </div>
@endsection
@section('sidebar')
    @include('pages.sidebar')
@endsection
@section('footer')
    @include('pages.footer')
@endsection

