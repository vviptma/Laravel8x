@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Quản Lý</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{--Custom Nav--}}
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
{{--                            <a class="navbar-brand" href="#">Navbar</a>--}}
{{--                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                                <span class="navbar-toggler-icon"></span>--}}
{{--                            </button>--}}

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only">(current)</span></a>
                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="#">Quan ly danh sach</a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Quản lý danh mục
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Thêm danh mục</a>
                                            <a class="dropdown-item" href="#">Liệt kê danh mục</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Truyện Sách
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Thêm sách truyện</a>
                                            <a class="dropdown-item" href="#">Liệt kê danh mục</a>
                                        </div>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                                </form>
                            </div>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
