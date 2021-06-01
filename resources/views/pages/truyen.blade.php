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
{{--CHECK--}}
@php
    $allchapter = count($dsallchapter);
    $newchapter = count($dsnewchapter);
@endphp
{{--//CHECK--}}

@section('content')
    <div class="row">
        <div class="col-sm-8">
            {{--BREADCRUMB--}}
            <div class="breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{asset('danhmuc/'.$info_truyen->danhmuctruyen->slug_danhmuc)}}">{{$info_truyen->danhmuctruyen->tendanhmuc}}</a>
                        </li>
                        <li class="breadcrumb-item active text-success"
                            aria-current="page">{{$info_truyen->tentruyen}}</li>
                    </ol>
                </nav>
            </div>
            {{--INFOR TRUYỆN--}}
            <div class="card mb-3">
                <div class="card-body" id="story-detail">
                    <div class="row">
                        <div class="col-md-5 col-6">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$info_truyen->hinhanh)}}">
                            <div class="card infor">
                                <ul class="list-group list-group-flush">
                                    <p class="list-group-item">
                                        <i class="fa fa-user"></i><span>Tác giả: {{$info_truyen->tacgia}}</span>
                                    </p>
                                    <p class="list-group-item"><i class="fa fa-folder-open"></i>
                                        <span>Danh mục:
                                            <a href="{{asset('danhmuc/'.$info_truyen->danhmuctruyen->slug_danhmuc)}}">{{$info_truyen->danhmuctruyen->tendanhmuc}}</a>
                                        </span>
                                    </p>
                                    <p class="list-group-item"><i class="fa fa-folder-open"></i>
                                        <span>Thể loại:
                                            <a href="{{asset('theloai/'.$info_truyen->theloai->slug_theloai)}}">{{$info_truyen->theloai->tentheloai}}</a>
                                        </span>
                                    </p>
                                    <p class="list-group-item"><i class="fab fa-sourcetree"></i><span>Bản quyền: </span>
                                    </p>
                                    <p class="list-group-item"><i class="fa fa-eye"></i><span>Lượt xem: </span></p>
                                    <p class="list-group-item"><i class="fa fa-star"></i><span>Tình trạng: </span></p>
                                    <p class="list-group-item"><i
                                            class="fas fa-sync-alt"></i><span>{{$info_truyen->updated_at}}</span></p>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-6">
                            <div class="card-info">
                                <div class="text-center text-uppercase text-success">
                                    <h3 itemprop="name" class="title">{{$info_truyen->tentruyen}}</h3>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item actions text-center">
                                        <a class="btn btn-success" data-id="danhsachchuong" href="#danhsachchuong">Danh
                                            sách chương</a>
                                        <a class="btn btn-danger" href="#">Truyện yêu thích</a>
                                    </li>
                                    <li class="list-group-item text-center">
                                        @if(!empty($first_chapter))
                                            <a class="btn btn-success"
                                               href="{{url('chapter/'.$first_chapter->slug_chapter)}}">Đọc ngay</a>
                                        @else
                                            <span class="text-danger"><i class="fas fa-battery-empty"></i> Chưa cập nhật</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        <div class="description">
                                            {!!  $info_truyen->tomtat !!}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--5 CHƯƠNG MỚI NHẤT TRUYỆN--}}
            <div class="card mb-3">
                <div class="card-header"><h5 class="text-uppercase"><i class="fas fa-list-ol"></i>
                        <span>5 CHƯƠNG MỚI NHẤT TRUYỆN {{$info_truyen->tentruyen}}</span></h5></div>
                <div class="list-group">
                    @if($newchapter > 0)
                        @foreach($dsnewchapter as $key => $chapter)
                            <a type="button" class="list-group-item list-group-item-action text-dark"
                               href="{{url('chapter/'.$chapter->slug_chapter)}}">{{$chapter->tieude}}</a>
                        @endforeach
                    @else
                        <a type="button" class="list-group-item list-group-item-action">Đang được cập nhật thêm...</a>
                    @endif
                </div>
            </div>
            {{--DANH SÁCH CHƯƠNG TRUYỆN VÀ PHÂN TRANG 30 CHƯƠNG --}}
            <div id="danhsachchuong" class="card mb-3">
                <div class="card-header"><h5 class="text-uppercase"><i class="fas fa-list-ol"></i>
                        <span>DANH SÁCH TẤT CẢ CHƯƠNG TRUYỆN {{$info_truyen->tentruyen}}</span></h5></div>
                <div class="list-group">
                    @if($allchapter > 0)
                        @foreach($dsallchapter as $key => $chapter)
                            <a type="button" class="list-group-item list-group-item-action text-dark"
                               href="{{url('chapter/'.$chapter->slug_chapter)}}">{{$chapter->tieude}}</a>
                        @endforeach
                        <div class="card-footer text-center"><p>{!! $dsallchapter->links() !!}</p></div>
                    @else
                        <a type="button" class="list-group-item list-group-item-action">Đang được cập nhật thêm...</a>
                    @endif
                </div>
            </div>
            {{--NHẬN XÉT CỦA ĐỘC GIẢ VỀ TRUYỆN  --}}
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="text-uppercase"><i class="fas fa-list-ol"></i>
                        <span>NHẬN XÉT CỦA ĐỘC GIẢ VỀ TRUYỆN  {{$info_truyen->tentruyen}}</span>
                    </h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                              placeholder="Nội dung bình luận tối thiểu 15 ký tự, tối đa 500 ký tự!"></textarea>
                            <small class="float-right">Số ký tự: xxx</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                    </form>
                </div>
                <div class=" p-3 bg-white rounded box-shadow">
                    <h6 class="border-bottom border-gray pb-2 mb-0">Tính năng này đang được nâng cấp</h6>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32"
                             class="mr-2 rounded" style="width: 32px; height: 32px;"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17981448126%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17981448126%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <div class="media text-muted pt-3 pl-5">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=e83e8c&amp;fg=e83e8c&amp;size=1" alt="32x32"
                             class="mr-2 rounded"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17981448127%20text%20%7B%20fill%3A%23e83e8c%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17981448127%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23e83e8c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <div class="media text-muted pt-3 pl-5">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=6f42c1&amp;fg=6f42c1&amp;size=1" alt="32x32"
                             class="mr-2 rounded"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17981448128%20text%20%7B%20fill%3A%236f42c1%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17981448128%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%236f42c1%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32"
                             class="mr-2 rounded" style="width: 32px; height: 32px;"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17981448126%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17981448126%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <small class="d-block text-right mt-3 text-center">
                        <a href="#">Xem thêm Ajax</a>
                    </small>
                </div>
            </div>
            {{--NHẬN XÉT FACEBOOK  --}}
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="text-uppercase"><i class="fas fa-list-ol"></i>
                        <span>NHẬN XÉT FACEBOOK VỀ TRUYỆN {{$info_truyen->tentruyen}}</span>
                    </h5>
                </div>
                <div class="card-body">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0"
                            nonce="w0jhgg7T"></script>
                    <div class="fb-comments" data-href="https://webtruyen.com/cuu-tinh-ba-the-quyet/" data-width="100%"
                         data-numposts="5"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            @include('pages.sidebar')
        </div>
    </div>
@endsection
@section('sidebar')
    @include('pages.sidebar')
@endsection
@section('footer')
    @include('pages.footer')
@endsection
