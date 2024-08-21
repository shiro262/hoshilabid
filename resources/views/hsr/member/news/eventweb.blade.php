@section('title', 'Event web kepulangan "Perjalanan Kembali ke Bintang-Bintang" telah dirilis, ikuti untuk mendapatkan hingga Stellar Jade ×480 dan hadiah lainnya! - Honkai: Star Rail | HoshiLab')
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
            Event web kepulangan "Perjalanan Kembali ke Bintang-Bintang" telah dirilis, ikuti untuk mendapatkan hingga Stellar Jade ×480 dan hadiah lainnya!
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              27/03/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/eventweb.png')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                Dear Trailblazer, <br><br>
                rekan-rekan Express menunggumu loh. Ayo lakukan perjalanan bersama dan kembali menuju petualangan galaksi! Dapatkan hingga Stellar Jade ×480!
                </p>
                <br>
                <p class="card-text" style="font-weight:bold">
                    Waktu Event
                </p>
                <p class="card-text">
                    2024/03/27 07:00:00 - 2024/05/08 06:00:00（UTC+8）
                </p>
                <br>
                <a style="font-weight: bold;"  href="https://act.hoyoverse.com/sr/event/e20240327reflow-d60j7l/index.html?game_biz=hkrpg_global&hyl_presentation_style=fullscreen&hyl_auth_required=true&hyl_hide_status_bar=true&hyl_landscape=true&win_mode=fullscreen&utm_source=hsrofficialweb&utm_medium=news">Ikuti Event</a> <br><br>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
