@extends('../layout')
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
    Đây là chương truyện
@endsection
@section('footer')
    @include('pages.footer')
@endsection

