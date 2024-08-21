@section('title', 'Mendekati Star Rail — "Aventurine: Tangan Mana yang Mengenggam Koin?" - Honkai: Star Rail | HoshiLab')
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
            Mendekati Star Rail — "Aventurine: Tangan Mana yang Mengenggam Koin?" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              17/04/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/aventurine.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Sekeping chip beratnya mungkin hanya beberapa gram, tapi ia memiliki kekuatan dahsyat untuk memengaruhi keseimbangan timbangan. <br><br>

                    Jari jemari pejudi memainkan chip seperti kunci takdir, dilempar lembut, lalu terjatuh. Detak jantung bagaikan benturan emas dan batu, dalam sekejap menimbang surga dan neraka. <br><br>

                    (Peringatan Interastral Peace Entertainment: Hargai hidup, jauhi perjudian.) <br><br>
                    Saksikan program khusus Interastral Peace Entertainment "Mendekati Star Rail" — "Aventurine: Tangan Mana yang Mengenggam Koin?" <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/2wMuR2Mrwt0?=1&=1"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
