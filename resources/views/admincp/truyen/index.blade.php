@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Hiển thị Truyệń</div>
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
                                <th scope="col">ID</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tên truyện</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Chức năng</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dstruyen as $key => $truyen)
                                <tr>
                                    <th scope="row">#{{$truyen->id}}</th>
                                    <td><img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="150" width="auto"></td>
                                    <td>{{$truyen->tentruyen}}</td>
                                    <td>{{$truyen->tacgia}}</td>

                                    {{--Hiển thị id danh mục--}}
                                    <td>{{$truyen->danhmuctruyen->tendanhmuc}}</td>


                                    <td>@if($truyen->kichhoat==0)
                                            <span class="text text-success">Kích hoạt</span>
                                        @else
                                            <span class="text text-danger">Không Kích hoạt</span>
                                        @endif
                                    </td>
                                    <td><small>{{$truyen->updated_at}}</small></td>
                                    <td>
                                        <a href="{{route('truyen.edit',[$truyen->id])}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('truyen.destroy',[$truyen->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Bạn chắc chắn muốn xóa truyện này ư?');" class="btn btn-danger">
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
