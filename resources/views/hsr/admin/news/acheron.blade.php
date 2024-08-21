@section('title', 'Trailer Karakter Acheron: "Warnamu" - Honkai: Star Rail | HoshiLab')
@extends('template.masteradminhsr')
@section('content')
<div class="card text-center" style="background:black;">
  <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
  <div class="card-img-overlay">
  <br/><br/><br/><br/>
  <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
  <div class="col d-flex justify-content-center">
      <div class="card-transparent w-50 p-3" style="border:1px solid white;">
          <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
            Trailer Karakter Acheron: "Warnamu" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              26/03/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/acheron.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    "Perjalanan kita kembali dimulai. Kehidupan lewat seperti hujan sesaat, dan pada akhirnya menyatu dengan tanah. Semoga lain kali kita bertemu ... di bawah langit yang biru." <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/IQQPDPAvxTg?=1&=1"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection