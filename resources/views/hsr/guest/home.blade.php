@section('title', 'Home - Honkai: Star Rail | HoshiLab')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <video muted autoplay loop>
        <source src="{{asset('storage/trailer/Into the Yawning Chasm.mp4')}}" type="video/mp4"/>
    </video>
    <div class="card-img-overlay">
    <br/><br/><br/><br/><br/><br/>
      <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 45px;">
      HoshiLab - Honkai: Star Rail wiki and tier list
      </h1>
      <p class="card-text" style="color:White;" >
        HoshiLab adalah sebuah wiki untuk game Hoyoverse. Lihat daftar tier dan ulasan kami untuk karakter!<br/>
        Lihat juga forum komunitas kami!
      </p>
      <h1  style="color:white; font-family:Brush Script Std; font-size: 45px;">
        Event Saat ini:
      </h1>
      <div class="row row-cols-3 justify-content-md-center">
        <div class="card-transparent" style="width: 35rem;">
            <img class="card-img-top" src="{{asset('storage/trailer/Then Wake to Weep.png')}}" alt="Card image cap">
            {{-- <div class="card-body">
                <img src="{{asset('storage/image/Symphony of Truth Logo.png')}}">
            </div> --}}
        </div>
      </div>
</div>
<div class="card text-center" style="background:black;">
  <img src="{{asset('storage/image/Stellaron Hunter.jpg')}}" style="opacity: 0.4;">
  <div class="card-img-overlay">
  <br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 45px;">
    HoshiLab menyediakan semua yang kamu perlukan!
    </h1>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Guest Guide Honkai Star Rail Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/Guide_hsr.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Guides</h5>
          <p class="card-text" style="color:white;">Pengetahuan adalah kekuatan dan HoshiLab mengajarkan Anda apa yang harus dilakukan (atau apa yang tidak boleh dilakukan) untuk mendapatkan keuntungan dari pemain lain.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href="{{ route('Guest Character Honkai Star Rail Page') }}">
            <img class="card-img-top" src="{{asset('storage/image/Character_hsr.png')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Characters Review</h5>
          <p class="card-text" style="color:white;">Game Gacha berkutat pada pengumpulan karakter dan HoshiLab membantu Anda menggunakannya dengan cara yang optimal.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Guest Tier List MOC Honkai Star Rail Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/moc_tierlist.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Memory of Chaos Tier list dan meta analysis</h5>
          <p class="card-text" style="color:white;">Kesulitan dalam menyelesaikan Memory of Chaos, tier list ini akan membantu anda dalam membentuk tim terkuat!</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Guest Tier List PF Honkai Star Rail Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/purefiction_tierlist.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Pure Fiction Tier list dan meta analysis</h5>
          <p class="card-text" style="color:white;">Pure Fiction sangat berbeda dengan Memory of Chaos! Intip Tier List ini untuk mendapatkan informasi character terbaik dalam menaklukkannya!</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Guest Star Rail News Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/News_hsr.jpg')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">News dan updates</h5>
          <p class="card-text" style="color:white;">Tetap up to date dengan catatan tambalan, konten baru, atau pembaruan penting lainnya.</p>
        </div>
      </div>
      <div class="card-transparent" style="width: 20rem;">
        <a href={{ route('Member HSR Forum Page') }}>
            <img class="card-img-top" src="{{asset('storage/image/Forum_hsr.png')}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title" style="color:white;">Community Forum</h5>
          <p class="card-text" style="color:white;">Berinteraksi dan bagikan pendapat Anda tentang game ini dengan komunitas HoshiLab!</p>
        </div>
      </div>
    </div>
</div>
@endsection
