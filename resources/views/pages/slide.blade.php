<div class="owl-carousel owl-theme mt-5">
    @foreach($dstruyen as $key => $truyen)
    <div class="item">
        <a href="{{url('truyen/'.$truyen->slug_truyen)}}">
        <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
        </a>
        <h5>{{$truyen->tentruyen}}</h5>
        <p><i class="fas fa-eye"></i>{{$truyen->danhmuctruyen->tendanhmuc}}</p>
    </div>
    @endforeach
</div>
