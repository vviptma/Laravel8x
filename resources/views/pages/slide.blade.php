<div class="card mb-3">
    <div class="card-header"><h5>TRUYỆN ĐỀ CỬ</h5></div>
    <div class="card-body">
        <div class="owl-carousel owl-theme">
            @foreach($dstruyendecu as $key => $truyen)
                <div class="card card-slide">
                    <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
                        <img class="card-img-top card-img-top-slide" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
                    </a>
                    <div class="card-body card-body-slide">
                        <a class="text-decoration-none" href="{{url('truyen/'.$truyen->slug_truyen)}}"><h5 class="card-title text-white">{{$truyen->tentruyen}}</h5></a>
                        <small class="card-text"><i class="fas fa-eye"></i>{{$truyen->danhmuctruyen->tendanhmuc}}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

