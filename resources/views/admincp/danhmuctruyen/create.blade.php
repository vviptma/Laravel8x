@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Thêm Danh Mục Truyện</div>
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
                        <form method="POST" action="{{route('danhmuc.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="tendanhmuc">Tên danh mục</label>
                                <input type="text" class="form-control" value="{{old('tendanhmuc')}}" onkeyup="ConvertNameToSlug();" name="tendanhmuc"
                                       id="tendanhmuc" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="slug_danhmuc">Slug danh mục</label>
                                <input type="text" class="form-control" value="{{old('slug_danhmuc')}}" name="slug_danhmuc"
                                       id="slug_danhmuc" placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label for="mota">Mô tả danh mục</label>
                                <input type="text" class="form-control" value="{{old('mota')}}" name="mota" id="mota"
                                       placeholder="Mô tả danh mục">
                            </div>
                            <div class="form-group">
                                <label for="kichhoat">Kích hoạt</label>
                                <select name="kichhoat" class="custom-select" required>
                                    <option value="">Lựa chọn...</option>
                                    <option value="0" selected>Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>
                            <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm danh mục</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
