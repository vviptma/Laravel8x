@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Thêm chương</div>
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
                        <form method="POST" action="{{route('chapter.store')}}" enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="tieude">Tiêu đề</label>
                                <input type="text" class="form-control" value="{{old('tieude')}}" onkeyup="ConvertNameToSlug();" name="tieude"
                                       id="tendanhmuc" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group">
                                <label for="slug_chapter">Slug</label>
                                <input type="text" class="form-control" value="{{old('slug_chapter')}}" name="slug_chapter"
                                       id="slug_danhmuc" placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label for="noidung">Nội dung</label>
                                <textarea class="form-control" name="noidung" id="noidung" rows="5">{{old('noidung')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tomtat">Tóm tắt truyện</label>
                               <textarea class="form-control" name="tomtat" id="tomtat" rows="5">{{old('tomtat')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="truyen_id">Thuộc truyện</label>
                                <select name="truyen_id" id="truyen_id" class="custom-select" required>
                                    <option value="" selected>Lựa chọn...</option>
                                    @foreach($dstruyen as $key => $truyen)
                                        <option value="{{$truyen->id}}">{{$truyen->tentruyen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kichhoat">Kích hoạt</label>
                                <select name="kichhoat" class="custom-select" required>
                                    <option value="" selected>Lựa chọn...</option>
                                    <option value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>
                            <button type="submit" name="themchapter" class="btn btn-primary">Thêm chương</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
