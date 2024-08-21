@section('title', 'Trailer Perjalanan Seribu Bintang: "Jika Memiliki Sepasang Sayap" - Honkai: Star Rail | HoshiLab')
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
            Trailer Perjalanan Seribu Bintang: "Jika Memiliki Sepasang Sayap" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              03/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/seribubintang.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                Kalau memiliki sepasang sayap, maka kita akan terbang menuju langit. <br><br>

                Meskipun kita ditakdirkan untuk jatuh suatu saat nanti. <br><br>

                Tidak perlu mendambakan keabadian, dan tidak perlu takut akan momen ini. <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/LlO4z29axuA?=1&=1"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
