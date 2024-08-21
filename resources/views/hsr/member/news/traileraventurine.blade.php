@section('title', 'Trailer Karakter Aventurine: "Jari Jemari Emas" - Honkai: Star Rail | HoshiLab')
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
            Trailer Karakter Aventurine: "Jari Jemari Emas" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              16/04/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/trailer aventurine.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                  "Pada akhirnya kepura-puraan kerap kali menyembunyikan sesuatu, meskipun pada awalnya tidak ada yang disembunyikan." <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/kKj16KPl0jg?=1&=1"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
