@section('title', 'Program Khusus Versi 2.3 "Selamat Tinggal, Penacony" | Honkai: Star Rail | HoshiLab')
@extends('template.mastermemberhsr')
@section('content')
<div class="card text-center" style="background:black;">
  <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
  <div class="card-img-overlay">
  <br/><br/><br/><br/>
  <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
  <div class="col d-flex justify-content-center">
      <div class="card-transparent w-50 p-3" style="border:1px solid white;">
          <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
            Program Khusus Versi 2.3 "Selamat Tinggal, Penacony" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              03/06/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/byepenacony.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Hai, Trailblazer! <br><br>
                    Program Khusus "Selamat Tinggal, Penacony" Versi 2.3 "Honkai: Star Rail" akan resmi dimulai pada 7 Juni 2024 19:30 (UTC+8). <br><br>
                    Live streaming kali ini akan membawakan pengenalan karakter Firefly dan Jade, beserta preview mengenai alur cerita utama, event, dan hadiah-hadiah baru! <br><br>
                    Ikuti live streaming resmi agar tidak ketinggalan informasi versi terbaru! <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/SCGFxtsZYLM"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
