@section('title', 'Home - Honkai: Star Rail')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <video muted autoplay loop>
        <source src="{{asset('storage/trailer/Into the Yawning Chasm.mp4')}}" type="video/mp4"/>
    </video>
    <div class="card-img-overlay">
    <br/><br/><br/><br/><br/><br/>
      <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 45px;">
      HoshiLab.id - Honkai: Star Rail wiki and tier list
      </h1>
      <p class="card-text" style="color:White;" >
        HoshiLab.id adalah sebuah wiki untuk game Hoyoverse. Lihat daftar tier dan ulasan kami untuk karakter!<br/>
        Lihat juga forum komunitas kami!
      </p>
      <h1  style="color:white; font-family:Brush Script Std; font-size: 45px;">
        Event Saat ini:
      </h1>
      <div class="row row-cols-3 justify-content-md-center">
        <div class="card-transparent" style="width: 35rem;">
            <img class="card-img-top" src="{{asset('storage/trailer/Into the Yawning Chasm.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <img src="{{asset('storage/image/Symphony of Truth Logo.png')}}">
            </div>
        </div>
      </div>
</div>
<div class="card text-center" style="background:black;">
  <img src="{{asset('storage/image/starrail.jpg')}}" style="opacity: 0.4;">
  <div class="card-img-overlay">
  <br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 45px;">
    HoshiLab.id menyediakan semua yang kamu perlukan!
    </h1>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Member Guide Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/guide.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Guides</h5>
          <p class="card-text" style="color:white;">Pengetahuan adalah kekuatan dan HoshiLab mengajarkan Anda apa yang harus dilakukan (atau apa yang tidak boleh dilakukan) untuk mendapatkan keuntungan dari pemain lain.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href="{{ route('Member Character Page') }}">
            <img class="card-img-top" src="{{asset('storage/image/charareview.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Characters Review</h5>
          <p class="card-text" style="color:white;">Game Gacha berkutat pada pengumpulan karakter dan HoshiLab membantu Anda menggunakannya dengan cara yang optimal.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Member Tier List Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/tier list.png')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Tier list dan meta analysis</h5>
          <p class="card-text" style="color:white;">Apakah kamu seorang pengikut meta atau kolektor, memainkan game gacha apa pun tanpa daftar tier yang bagus akan mempersulit segalanya.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Member News Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/newsupdate.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">News dan updates</h5>
          <p class="card-text" style="color:white;">Tetap up to date dengan catatan tambalan, konten baru, atau pembaruan penting lainnya.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Member Blog Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/blog.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Community Blog</h5>
          <p class="card-text" style="color:white;">Berinteraksi dan bagikan pendapat Anda tentang game ini dengan komunitas HoshiLab!</p>
        </div>
      </div>
    </div>
</div>
@endsection
