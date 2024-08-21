@section('title', 'Mendekati Star Rail — "Yunli: Yang Bertelanjang Kaki Tidak Takut Pakai Sepatu" | Honkai: Star Rail | HoshiLab')
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
            Mendekati Star Rail — "Yunli: Yang Bertelanjang Kaki Tidak Takut Pakai Sepatu" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              24/07/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/yunli.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Ritual Bela Diri akan segera dimulai. Tamu pendekar pedang yang kedua paling muda dari "Flamewheel Octet" juga sudah tiba di Luofu. Sepertinya pertempuran antara para jenius muda tidak bisa dihindari ... Siapa yang akan meraih kemenangan? Situasinya sangat rumit, benar-benar membingungkan! <br><br>

                    Saksikan program khusus Interastral Peace Entertainment "Mendekati Star Rail" — "Yunli: Yang Bertelanjang Kaki Tidak Takut Pakai Sepatu".
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/7fw39wVjKwY"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection