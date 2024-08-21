@section('title', 'Mendekati Star Rail — "Gallagher: Minum Lebih Banyak Air & Kurangi Minum Soda" - Honkai: Star Rail | HoshiLab')
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
            Mendekati Star Rail — "Gallagher: Minum Lebih Banyak Air & Kurangi Minum Soda" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              28/03/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/gallagher.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Dia adalah petugas keamanan yang paling ahli dalam meracik minuman, dan juga bartender yang paling ahli dalam menegakkan keadilan. Dia tidak hanya bisa meracik minuman-minuman ajaib yang akan membuat alismu terangkat, tapi dia juga bisa membuat lawannya pusing tujuh keliling sembari memutar-mutar shaker miliknya! <br><br>

                    Saksikan program khusus Interastral Peace Entertainment "Mendekati Star Rail" — "Gallagher: Minum Lebih Banyak Air & Kurangi Minum Soda". <br><br>

                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/rb6lbyYZ2AQ?=1&=1"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
