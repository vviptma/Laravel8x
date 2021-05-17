<div class="">
    {{--THỂ LOẠI TRUYỆN--}}
    <div class="clearfix">
        <h5>THỂ LOẠI TRUYỆN</h5>
        <div class="row">
            @foreach($dsdanhmuc as $key => $danhmuc)
            <div class="col-6">
                <i class="fas fa-bookmark"></i> <a href="{{$danhmuc->slug_danhmuc}}">{{$danhmuc->tendanhmuc}}</a>
            </div>
            @endforeach
        </div>
    </div>
    <hr>
    {{--CÙNG THỂ LOẠI--}}
    <div class="">
        <h5>10 TRUYỆN CÙNG THỂ LOẠI</h5>
        <div class="">
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
        <button class="btn btn-success">Xem thêm</button>
    </div>
    <hr>
    {{--BANNER QUẢNG CÁO--}}

    {{--REVIEW TRUYỆN--}}
    <div class="">
        <h5>5 REVIEW TRUYỆN</h5>
        <div class="">
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
        <button class="btn btn-success">Xem thêm</button>
    </div>
    <hr>
    {{--TRUYỆN MỚI--}}
    <div class="">
        <h5>10 TRUYỆN MỚI</h5>
        <div class="">
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
        <button class="btn btn-success">Xem thêm</button>
    </div>
    <hr>
    {{--TRUYỆN FULL--}}
    <div class="">
        <h5>10 TRUYỆN FULL</h5>
        <div class="">
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
        <button class="btn btn-success">Xem thêm</button>
    </div>
</div>
