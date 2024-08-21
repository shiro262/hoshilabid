@section('title', 'Mendekati Star Rail — "Robin: Presale Konser Hidup Bagaikan Lagu Laris Manis!" - Honkai: Star Rail | HoshiLab')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
  <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
  <div class="card-img-overlay">
  <br/><br/><br/><br/>
  <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
  <div class="col d-flex justify-content-center">
      <div class="card-transparent w-50 p-3" style="border:1px solid white;">
          <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
            Mendekati Star Rail — "Robin: Presale Konser 'Hidup Bagaikan Lagu' Laris Manis!" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                01/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/Robinpresale.png')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                Irama dunia adalah denyut nadi jutaan nyawa. <br><br>

                Dengarkan setiap not yang berdetak, rasakan irama yang mengelilingimu. <br><br>

                Ketika alam semesta runtuh, hanya musik yang dapat menyelamatkan hati yang hancur. <br><br>

                Rayakan kehidupan dan bernyanyilah untuk dunia! Presale tiket konser Robin "Hidup Bagaikan Lagu" laris manis! Dapatkan tiketmu! <br><br>
                Saksikan program khusus Interastral Peace Entertainment "Mendekati Star Rail" — "Robin: Presale Konser 'Hidup Bagaikan Lagu' Laris Manis!". <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/i2YXaozZ6qg?=1&=1"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
