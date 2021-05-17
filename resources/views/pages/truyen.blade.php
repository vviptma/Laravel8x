@extends('../layout')
@section('ads')
    @include('pages.ads')
@endsection
{{--@section('slide')--}}
{{--    @include('pages.slide')--}}
{{--@endsection--}}
@section('menu')
    @include('pages.menu')
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
    {{--INFOR TRUYỆN--}}
    <div class="row">
        <div class="col-md-4">
            <div class="img-thumbnail">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$info_truyen->hinhanh)}}">
            </div>
            <div class="infor">
                <p class="author">
                    <i class="fa fa-user"></i>
                    <span>
                                <a href="#">Tác giả</a>
                            </span>
                </p>
                <p class="categories">
                    <i class="fa fa-folder-open"></i>
                    <span>
                                <a href="#">Thể loại</a>
                            </span>
                </p>
                <p><i class="fab fa-sourcetree"></i> Nguồn: VIP</p>
                <p>
                    <i class="fa fa-eye"></i>
                    Lượt xem: 9999
                </p>
                <p><i class="fa fa-star"></i>Đang cập nhật</p>
                <p><i class="fas fa-sync-alt"></i>22:50:31 15/05/2021</p>
            </div>
        </div>
        <div class="col-md-8">
            <h5 itemprop="name" class="title">{{$info_truyen->tentruyen}}</h5>

            {{--ĐÁNH GIÁ SAO--}}
            {{--            <div class="rate">--}}
            {{--                <div class="rate-holder" data-score="6.1"><span style="width:61%"></span>--}}
            {{--                    <p id="rating-action"><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
            {{--                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
            {{--                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
            {{--                            class="fa fa-star"></i><i class="fa fa-star"></i></p></div>--}}
            {{--                <div class="small"><em>Đánh giá: <strong><span>6.1</span></strong>/<span--}}
            {{--                            class="text-muted">10</span> từ <strong><span>435</span> lượt</strong></em></div>--}}
            {{--            </div>--}}

            <div class="actions">
                <a class="btn btn-success" href="#danhsachchuong">Danh sách chương</a>
                <a class="btn btn-success" href="#">Truyện yêu thích</a>
                <hr>
                {{--Kiểm tra chương truyện--}}
                @if($info_truyen->chapter->count() > 0)
                    <a class="btn btn-success" href="{{url('chapter/'.$info_truyen->chapter[0]->slug_chapter)}}">Đọc chương đầu tiên</a>
                @else
                    <a class="btn btn-success" href="#">Đang cập nhật...</a>
                @endif
                {{--Kiểm tra chương truyện--}}
            </div>
            <hr>
            <div class="description">
                <p>{!! $info_truyen->tomtat !!}</p>
            </div>
        </div>
    </div>
    <hr>
    {{--5 CHƯƠNG MỚI NHẤT TRUYỆN--}}
    <div class="row">
        <div class="col-md-12">
            <h5>5 CHƯƠNG MỚI NHẤT TRUYỆN</h5>
        </div>
    </div>
    <hr>
    {{--DANH SÁCH CHƯƠNG TRUYỆN VÀ PHÂN TRANG 30 CHUONG --}}
    <div id="danhsachchuong" class="row">
        <div class="col-md-12">
            <h5>DANH SÁCH CHƯƠNG</h5>
            <p>ĐI TỚI TRANG</p>
        </div>
    </div>
    <hr>
    {{--NHẬN XÉT CỦA ĐỘC GIẢ VỀ TRUYỆN  --}}
    <div class="row">
        <div class="col-md-12">
            <h5>NHẬN XÉT CỦA ĐỘC GIẢ VỀ </h5>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <button class="btn btn-success">Gửi</button>
                </div>
            </form>
            <ul class="list-unstyled">
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Bình luận 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Bình luận 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
                <li class="media">
                    <img src="http://laravel-webtruyen.test/public/uploads/truyen/conan91.jpg" class="mr-3" alt="..."
                         width="50" height="50">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Bình luận 1</h5>
                        Truyện này hay lắm
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    {{--NHẬN XÉT FACEBOOK  --}}
    <div class="row">
        <div class="col-md-12">
            <h5>NHẬN XÉT CỦA ĐỘC GIẢ BẰNG FACEBOOK </h5>
            <p>Form bình luận facebook</p>
        </div>
    </div>
    <hr>
@endsection
@section('sidebar')
    @include('pages.sidebar')
@endsection
@section('footer')
    @include('pages.footer')
@endsection
