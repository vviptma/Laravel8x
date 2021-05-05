@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hiển thị Danh Mục Truyệń</div>
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
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Mô tả danh mục</th>
                                <th scope="col">Slug danh mục</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Action</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($danhmuctruyen as $key => $danhmuc)
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$danhmuc->tendanhmuc}}</td>
                                    <td>{{$danhmuc->slug_danhmuc}}</td>
                                    <td>{{$danhmuc->mota}}</td>
                                    <td>@if($danhmuc->kichhoat==0)
                                            <span class="text text-danger">Kích hoạt</span>
                                        @else
                                            <span class="text text-success">Không Kích hoạt</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('danhmuc.edit',[$danhmuc->id])}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('danhmuc.destroy',[$danhmuc->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Bạn chắc chắn muốn xóa danh mục truyện này ư?');" class="btn btn-danger">
                                            DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
