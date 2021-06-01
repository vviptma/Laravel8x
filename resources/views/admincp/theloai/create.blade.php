@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Thêm Truyện</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{route('theloai.store')}}" enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="tentheloai">Tên Thể Loại</label>
                                <input type="text" class="form-control" value="{{old('tentheloai')}}" onkeyup="ConvertNameToSlug();" name="tentheloai"
                                       id="tendanhmuc" placeholder="Tên Thể Loại">
                            </div>
                            <div class="form-group">
                                <label for="slug_theloai">Slug Thể Loại</label>
                                <input type="text" class="form-control" value="{{old('slug_theloai')}}" name="slug_theloai"
                                       id="slug_danhmuc" placeholder="Slug Truyện">
                            </div>
                            <div class="form-group">
                                <label for="tomtat">Tóm tắt Thể Loại</label>
                                <textarea class="form-control" name="tomtat" id="tomtat" rows="5" style="resize: none"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kichhoat">Kích hoạt</label>
                                <select name="kichhoat" class="custom-select" required>
                                    <option value="" selected>Lựa chọn...</option>
                                    <option value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>
                            <button type="submit" name="themtruyen" class="btn btn-primary">Thêm truyện</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
