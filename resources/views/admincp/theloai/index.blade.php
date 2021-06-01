@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Hiển thị danh mục truyện</div>
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
                                <th scope="col">Slug danh mục</th>
                                <th scope="col">Tóm tắt danh mục</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Chức năng</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dstheloai as $key => $theloai)
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$theloai->tentheloai}}</td>
                                    <td>{{$theloai->slug_theloai}}</td>
                                    <td>{!! $theloai->tomtat !!}</td>
                                    <td>@if($theloai->kichhoat==0)
                                            <span class="text text-success">Kích hoạt</span>
                                        @else
                                            <span class="text text-danger">Không Kích hoạt</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('theloai.edit',[$theloai->id])}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('theloai.destroy',[$theloai->id])}}" method="POST">
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
