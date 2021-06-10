@extends('../layout')
{{--MENU--}}
@section('menu')
    @include('pages.menu')
@endsection
{{--CONTENT--}}
@section('content')
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{url('theloai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('danhmuc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('truyen/'.$info_chapter->danhsachtruyen->slug_truyen)}}">{{$info_chapter->danhsachtruyen->tentruyen}}</a>
                    </li>
                </ol>
            </nav>
            {{--INFO CHAPTER--}}
            <div id="chapter">
                <div class="chapter-info chapter-border">
                    <div class="h-100 m-2 p-2 bg-light chapter-border rounded-3 text-center">
                        <h2>
                            <a class="story-title text-uppercase font-weight-bold"
                               href="{{url('truyen/'.$info_chapter->danhsachtruyen->slug_truyen)}}">{{$info_chapter->danhsachtruyen->tentruyen}}</a>
                        </h2>
                        <p><i class="fas fa-user"></i>{{$info_chapter->danhsachtruyen->tacgia}}</p>
                        <p><i class="fas fa-clock"></i>Sáng tác: {{$info_chapter->danhsachtruyen->created_at}}</p>
                        <p><i class="fas fa-sync-alt"></i>Cập nhật: {{$info_chapter->danhsachtruyen->updated_at}}</p>
                        <p><a class="story-title text-success font-weight-bold">{{$info_chapter->tieude}}</a></p>
                        {{--SHARE BUTTON FACEBOOK --}}
                        <div class="fb-share-button" data-href="{{\URL::current()}}"
                             data-layout="button" data-size="large"><a target="_blank"
                                                                       href="https://www.facebook.com/sharer/sharer.php?u={{\URL::current()}}&amp;src=sdkpreparse"
                                                                       class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        {{--END SHARE BUTTON FACEBOOK --}}

                    </div>

                    {{--Pre Choose Next Chapter--}}
                    <div class="chapter-button text-center">
                        <a id="btnPreChapter" type="button" class="btn btn-success @if(!$prechapter) disabled @endif"
                           href="{{url('chapter/'.$prechapter)}}">
                            <i class="fas fa-angle-left"></i> Trước
                        </a>
                        <select id="selectChapter" name="selectChapter" onchange="location = this.value;"
                                class="btn border selectChapter">
                            @foreach($dsallchapter as $key => $chapter)
                                <option @if($chapter->slug_chapter == $info_chapter->slug_chapter) selected
                                        @endif value="{{$chapter->slug_chapter}}">{{$chapter->tieude}}</option>
                            @endforeach
                        </select>
                        <a id="btnNextChapter" type="button" class="btn btn-success @if(!$nextchapter) disabled @endif"
                           href="{{url('chapter/'.$nextchapter)}}">
                            Sau <i class="fas fa-angle-right"></i></a>
                    </div>

                    <div class="chapter-content h-100 m-2 p-2 bg-light rounded-3 font-weight-bold">
                        <p>{!! $info_chapter->noidung !!}</p>
                    </div>

                    {{--Pre Choose Next Chapter--}}
                    <div class="chapter-button text-center">
                        <a id="btnPreChapter" type="button" class="btn btn-success @if(!$prechapter) disabled @endif"
                           href="{{url('chapter/'.$prechapter)}}">
                            <i class="fas fa-angle-left"></i> Trước
                        </a>
                        <select id="selectChapter" name="selectChapter" onchange="location = this.value;"
                                class="btn border selectChapter">
                            @foreach($dsallchapter as $key => $chapter)
                                <option @if($chapter->slug_chapter == $info_chapter->slug_chapter) selected
                                        @endif value="{{$chapter->slug_chapter}}">{{$chapter->tieude}}</option>
                            @endforeach
                        </select>
                        <a id="btnNextChapter" type="button" class="btn btn-success @if(!$nextchapter) disabled @endif"
                           href="{{url('chapter/'.$nextchapter)}}">
                            Sau <i class="fas fa-angle-right"></i></a>
                    </div>
                    {{--SHARE BUTTON FACEBOOK --}}
                    <div class="text-center m-2">
                        <div class="fb-share-button" data-href="{{\URL::current()}}"
                             data-layout="button" data-size="large">
                            <a target="_blank"
                               href="https://www.facebook.com/sharer/sharer.php?u={{\URL::current()}}&amp;src=sdkpreparse"
                               class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

                    </div>
                    {{--END SHARE BUTTON FACEBOOK --}}
                </div>
                {{--{{$danhsachchapter->links()}}--}}
                <div class="chapter-button clearfix"></div>
            </div>
        </div>
    </div>
    {{--    <script>--}}
    {{--        function selectPreChapter(){--}}
    {{--            var select = document.getElementById('selectChapter');--}}
    {{--            select.selectedIndex--;--}}
    {{--            window.location = select.value;--}}
    {{--        }--}}

    {{--        function selectNextChapter(){--}}
    {{--            var select = document.getElementById('selectChapter');--}}
    {{--            select.selectedIndex++;--}}
    {{--            window.location = select.value;--}}
    {{--        }--}}
    {{--    </script>--}}
    @include('pages.ads')
@endsection
{{--FOOTER--}}
@section('footer')
    @include('pages.footer')
@endsection

