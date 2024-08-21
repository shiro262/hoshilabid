@section('title', 'Undangan Perayaan - Honkai: Star Rail | HoshiLab')
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
            Undangan Perayaan
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              06/02/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/undangan.png')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                Halo, Trailblazer: <br><br>
                Event web kepulangan "Undangan Perayaan" telah dirilis, ikuti untuk mendapatkan hingga Stellar Jade ×540 dan hadiah lainnya!
                </p>
                <br>
                <p class="card-text" style="font-weight:bold">
                    Waktu Event
                </p>
                <p class="card-text">
                    06 Februari 2024 07:00 - 27 Maret 2024 06:00 (UTC+8)
                </p>
                <br>
                <p class="card-text">
                    Kirim undangan kepada temanmu di Planet Perayaan! Bergabunglah dalam perayaan luar biasa ini, dan kejarlah impianmu di taman hiburan Penacony! Dapatkan hingga Stellar Jade ×540!
                </p>
                <a style="font-weight: bold;"  href="https://act.hoyoverse.com/sr/event/e20240206relow-lxxr53/index.html?game_biz=hkrpg_global&hyl_presentation_style=fullscreen&hyl_auth_required=true&hyl_landscape=true&hyl_hide_status_bar=true&win_mode=fullscreen&utm_source=hsrofficialweb&utm_medium=news">Ikuti Event</a> <br><br>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
