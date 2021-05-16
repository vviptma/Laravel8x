@extends('../layout')
@section('ads')
    @include('pages.ads')
@endsection
@section('slide')
    @include('pages.slide')
@endsection
@section('content')
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
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}"
                             alt="Card image cap">
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
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/conan91.jpg')}}"
                             alt="Card image cap">
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
@endsection
@section('sidebar')
    @include('pages.sidebar')
@endsection
