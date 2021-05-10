<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danh Mục
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
                        <a class="dropdown-item" href="{{route('danhmuc.index')}}">Danh sách danh mục</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Truyện
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm sách truyện</a>
                        <a class="dropdown-item" href="{{route('truyen.index')}}#">Danh sách truyện</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chương
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chương</a>
                        <a class="dropdown-item" href="{{route('chapter.index')}}#">Danh sách chương</a>
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
