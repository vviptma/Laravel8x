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

    {{--Cardbox--}}
    <div class="card mb-3">
        <div class="card-header bg-transparent">{{$info_danhmuc->tendanhmuc}}</div>
        <div class="card-body">
            @foreach($dstruyen as $key => $truyen)
                <ul class="list-unstyled">
                    <li class="media border-bottom">
                        <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
                            <img class="mr-3" width="50" height="auto"
                                 src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" alt="...">
                        </a>
                        <div class="media-body">
                            <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
                                <h5 class="card-title">{{$truyen->tentruyen}}</h5>
                            </a>
                            <p><i class="fa fa-user"></i>{{$truyen->tomtat}}</p>
                            <p><i class="fas fa-bookmark"></i>{{$truyen->danhmuctruyen->tendanhmuc}}</p>
                        </div>
                    </li>
                </ul>
            @endforeach
        </div>
        <div class="card-footer">Chức năng phân trang</div>
    </div>
@endsection
@section('sidebar')
    @include('pages.sidebar')
@endsection
@section('footer')
    @include('pages.footer')
@endsection

