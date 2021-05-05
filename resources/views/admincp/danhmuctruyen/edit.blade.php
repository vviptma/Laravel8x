@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cập nhật Danh Mục Truyện</div>
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
                        <form method="POST" action="{{route('danhmuc.update',[$danhmuc->id])}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="tendanhmuc">Tên danh mục</label>
                                <input type="text" class="form-control" value="{{$danhmuc->tendanhmuc}}"
                                       name="tendanhmuc" id="tendanhmuc" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="slug_danhmuc">Slug danh mục</label>
                                <input type="text" class="form-control" value="{{$danhmuc->slug_danhmuc}}" name="slug_danhmuc"
                                       id="slug_danhmuc" placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label for="mota">Mô tả danh mục</label>
                                <input type="text" class="form-control" value="{{$danhmuc->mota}}" name="mota" id="mota"
                                       placeholder="Mô tả danh mục">
                            </div>
                            <div class="form-group">
                                <label for="kichhoat">Kích hoạt</label>
                                <select name="kichhoat" class="custom-select">
                                    <option selected>Lựa chọn...</option>
                                    @if($danhmuc->kichhoat==0)
                                        <option selected value="0">Kích hoạt</option>
                                        <option value="1">Không kích hoạt</option>
                                    @else
                                        <option value="0">Kích hoạt</option>
                                        <option selected value="1">Không kích hoạt</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" name="capnhatdanhmuc" class="btn btn-primary">Cập nhật danh mục
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
