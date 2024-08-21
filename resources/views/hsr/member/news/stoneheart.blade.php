@section('title', 'Trailer Perjalanan Seribu Bintang: "Stonehearts Oath Ring: Kedua Sisi Neraca" | Honkai: Star Rail | HoshiLab')
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
            Trailer Perjalanan Seribu Bintang: "Stoneheart's Oath Ring: Kedua Sisi Neraca" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              14/07/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/stoneheart.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Pemimpin Departemen Investasi Strategis, "Diamond", jarang muncul di depan umum. Sebuah kelompok bernama "Sepuluh Orang Berhati Batu" biasa berdiri di garis depan menggantikannya. <br> <br>

                    Saat menghadapi topik penting yang menyangkut kelangsungan hidup tim, "Diamond" mengizinkan sepuluh elite untuk membuat keputusan secara independen dan setara, yaitu melalui pemungutan suara. <br> <br>

                    Amber, Agate, Topaz, Sugilite, Aventurine, Pearl, Sapphire, Jade, Obsidian, dan Opal — <br><br>

                    Dan kini, satu Batu Landasan telah hancur, menyisakan hanya sembilan pemberat. Masalah berikutnya yang akan dihadirkan ke meja pasti akan berujung dengan neraca yang timpang .... <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/C5YQEsZ-yWU"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
