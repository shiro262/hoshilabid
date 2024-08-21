@section('title', 'Hoyoverse Fan Wiki & Community Forum | HoshiLab')
@extends('template.masteradminhome')
@section('content')
<div class="card text-center" style="background:black;">
    <video muted autoplay loop>
        <source src="{{asset('storage/trailer/Symphony of Truth Trailer 2.mp4')}}" type="video/mp4"/>
    </video>
    <div class="card-img-overlay">
    <br/><br/><br/><br/><br/><br/>
      <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 45px;">
      HoshiLab - Hoyoverse fan wiki & tier list
      </h1>
      <p class="card-text" style="color:White;" >
      Halo Admin!<br/>
      HoshiLab adalah sebuah wiki untuk game Hoyoverse. Lihat daftar tier dan ulasan kami untuk karakter!<br/>
      Lihat juga forum komunitas kami!<br/><br/>
      Pilih Game:
      </p>
      <br/>
      <div class="row row-cols-3 justify-content-md-center">
        <div class="card-transparent" style="width: 20rem;">
          <a href={{ route('admin Home Honkai Impact') }}>
              <img class="card-img-top" src="{{asset('storage/image/honkaiimpact.jpg')}}" alt="Card image cap">
          </a>
          <div class="card-body">
              <h5 class="card-title" style="color:white;">Honkai Impact 3rd</h5>
            <p class="card-text" style="color:white;"></p>
          </div>
        </div>
        <div class="card-transparent" style="width: 20rem;">
          <a href="{{ route('admin Home Genshin Impact') }}">
              <img class="card-img-top" src="{{asset('storage/image/genshinimpact.jpg')}}" alt="Card image cap">
          </a>
          <div class="card-body">
              <h5 class="card-title" style="color:white;">Genshin Impact</h5>
            <p class="card-text" style="color:white;"></p>
          </div>
        </div>
        <div class="card-transparent" style="width: 20rem;">
          <a href={{ route('admin Home Honkai Star Rail') }}>
              <img class="card-img-top" src="{{asset('storage/image/starrail.jpg')}}" alt="Card image cap">
          </a>
          <div class="card-body">
              <h5 class="card-title" style="color:white;">Honkai: Star Rail</h5>
            <p class="card-text" style="color:white;"></p>
          </div>
        </div>
  </div>
</div>
@endsection
