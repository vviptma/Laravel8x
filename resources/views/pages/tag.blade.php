@extends('../layout')
@section('ads')
    @include('pages.ads')
@endsection
@section('menu')
    @include('pages.menu')
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active text-success">Tìm kiếm truyện: {{$tag}}
            </li>
        </ol>
    </nav>

    @php
        $count = count($dstruyen);
    @endphp
    {{--Cardbox--}}
    <div class="card mb-3">
        <div class="card-header text-center"><h3 class="text-success">
                Tìm từ khóa: {{$tag}}</h3></div>
        <div class="card-body">
            @if($count == 0)
                <ul class="list-unstyled">
                    <h1 class="text-danger text-center">Không tìm thấy</h1>
                </ul>
            @else
                @foreach($dstruyen as $key => $truyen)
                    <ul class="list-unstyled">
                        <li class="media border-bottom">
                            <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
                                <img class="mr-3" width="100" height="auto"
                                     src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
                                    <h5 class="card-title">{{$truyen->tentruyen}}</h5>
                                </a>
                                {!! $truyen->tomtat !!}
                            </div>
                        </li>
                    </ul>
                @endforeach
            @endif
        </div>
        <div class="card-footer">Chức năng phân trang đang được cập nhật...</div>
    </div>
@endsection
@section('sidebar')
    @include('pages.sidebar')
@endsection
@section('footer')
    @include('pages.footer')
@endsection

