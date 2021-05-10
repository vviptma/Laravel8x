@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cập nhật truyện</div>
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
                        <form method="POST" action="{{route('truyen.update',[$truyen->id])}}" enctype='multipart/form-data'>
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="tentruyen">Tên truyện</label>
                                <input type="text" class="form-control" value="{{$truyen->tentruyen}}" onkeyup="ConvertNameToSlug();" name="tentruyen"
                                       id="tendanhmuc" placeholder="Tên truyện">
                            </div>
                            <div class="form-group">
                                <label for="slug_truyen">Slug truyện</label>
                                <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen"
                                       id="slug_danhmuc" placeholder="Slug Truyện">
                            </div>
                            <div class="form-group">
                                <label for="tomtat">Tóm tắt truyện</label>
                                <textarea class="form-control" name="tomtat" id="tomtat" rows="5" style="resize: none">{{$truyen->tomtat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="hinhanh">Hinh ảnh truyện</label>
                                <input type="file" class="form-control-file" value="{{old('hinhanh')}}" name="hinhanh"
                                       id="hinhanh" placeholder="Hình Ảnh">
                                <hr>
                                <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="150" width="auto">
                                <hr>
                            </div>
                            <div class="form-group">
                                <label for="danhmuc">Danh muc truyện</label>
                                <select name="danhmuc" class="custom-select">
                                    @foreach($danhmuc as $key => $muc)
                                        <option {{$muc->id == $truyen->danhmuc_id ?  'selected' : ''}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kichhoat">Kích hoạt</label>
                                <select name="kichhoat" class="custom-select">
                                    @if($truyen->kichhoat==0)
                                        <option selected value="0">Kích hoạt</option>
                                        <option value="1">Không kích hoạt</option>
                                    @else
                                        <option value="0">Kích hoạt</option>
                                        <option selected value="1">Không kích hoạt</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật truyện</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
