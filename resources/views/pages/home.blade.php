@extends('../layout')
@section('menu')
    @include('pages.menu')
@endsection
@section('slide')
    @include('pages.slide')
@endsection
@section('ads')
    @include('pages.ads')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            @include('pages.slide')
            <div class="card mb-3">
                <div class="card-header"><h5>SÁCH MỚI CẬP NHẬT</h5></div>
                <div class="card-body">
                    <div class="row">
                        @foreach($dstruyenmoi as $key => $truyen)
                            <div class="col-md-3 col-6">
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
                </div>
                <a class="btn btn-success" href="">Xem thêm</a>
            </div>
            <hr>
            <!-----SÁCH HAY XEM NHIỀU----->
            <div class="card mb-3">
                <div class="card-header"><h5>SÁCH HAY XEM NHIỀU</h5></div>
                <div class="card-body">
                    <div class="row">
                        <?php
                        for($i = 1;$i < 5 ; $i++): ?>
                        <div class="col-md-3 col-6">
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
                </div>
                <a class="btn btn-success" href="">Xem thêm</a>
            </div>
            <!-----Blogs----->
            <div class="card mb-3">
                <div class="card-header"><h5>BLOGS</h5></div>
                <div class="card-body">
                    <div class="row">
                        <?php
                        for($i = 1;$i < 5 ; $i++): ?>
                        <div class="col-md-3 col-6">
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
                </div>
                <a class="btn btn-success" href="">Xem thêm</a>
            </div>
        </div>
        <div class="col-md-4">
            @include('pages.sidebar')
        </div>
    </div>
@endsection
@section('footer')
    @include('pages.footer')
@endsection

