<div class="">
    {{--THỂ LOẠI TRUYỆN--}}
    <div class="card mb-3">
        <div class="card-header bg-transparent"><h5>THỂ LOẠI TRUYỆN</h5></div>
        <div class="card-body">
            <div class="row">
                @foreach($dsdanhmuc as $key => $danhmuc)
                    <div class="col-6">
                        <i class="fas fa-bookmark"></i>
                        <a href="{{url('danhmuc/'.$danhmuc->slug_danhmuc)}}">{{$danhmuc->tendanhmuc}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    {{--CÙNG THỂ LOẠI--}}
    <div class="card mb-3">
        <div class="card-header bg-transparent"><h5>10 TRUYỆN CÙNG THỂ LOẠI</h5></div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 2</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 3</h5>
                        Truyện này hay lắm
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer bg-transparent text-center"><button class="btn btn-success">Xem thêm</button></div>
    </div>
    <hr>
    {{--BANNER QUẢNG CÁO--}}

    {{--REVIEW TRUYỆN--}}
    <div class="card mb-3">
        <div class="card-header bg-transparent"><h5>REVIEW TRUYỆN</h5></div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 2</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 3</h5>
                        Truyện này hay lắm
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer bg-transparent text-center"><button class="btn btn-success">Xem thêm</button></div>
    </div>
    <hr>
    {{--10 TRUYỆN MỚI--}}
    <div class="card mb-3">
        <div class="card-header bg-transparent"><h5>10 TRUYỆN MỚI</h5></div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 2</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 3</h5>
                        Truyện này hay lắm
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer bg-transparent text-center"><button class="btn btn-success">Xem thêm</button></div>
    </div>
    <hr>
    {{--TRUYỆN FULL--}}
    <div class="card mb-3">
        <div class="card-header bg-transparent"><h5>10 TRUYỆN FULL</h5></div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 2</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Conan tập 3</h5>
                        Truyện này hay lắm
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer bg-transparent text-center"><button class="btn btn-success">Xem thêm</button></div>
    </div>
    <hr>
</div>
