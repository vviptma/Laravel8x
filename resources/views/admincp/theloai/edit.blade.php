@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Cập nhật Thể Loại</div>
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
                        <form method="POST" action="{{route('theloai.update',[$theloai->id])}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="tendanhmuc">Tên Thể Loại</label>
                                <input type="text" class="form-control" value="{{$theloai->tentheloai}}"
                                       name="tentheloai" id="tendanhmuc" onkeyup="ConvertNameToSlug();" placeholder="Tên thể loại">
                            </div>
                                <div class="form-group">
                                    <label for="slug_danhmuc">Slug thể loại</label>
                                    <input type="text" class="form-control" value="{{$theloai->slug_theloai}}" name="slug_theloai"
                                           id="slug_danhmuc" placeholder="Slug">
                                </div>
                            <div class="form-group">
                                <label for="tomtat">Tóm tắt truyện</label>
                                <textarea class="form-control" name="tomtat" id="tomtat" rows="5" style="resize: none">{{$theloai->tomtat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="kichhoat">Kích hoạt</label>
                                <select name="kichhoat" class="custom-select" required>
                                    <option value="" selected>Lựa chọn...</option>
                                    @if($theloai->kichhoat==0)
                                        <option selected value="0">Kích hoạt</option>
                                        <option value="1">Không kích hoạt</option>
                                    @else
                                        <option value="0">Kích hoạt</option>
                                        <option selected value="1">Không kích hoạt</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" name="capnhattheloai" class="btn btn-primary">Cập nhật Thể Loại
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
