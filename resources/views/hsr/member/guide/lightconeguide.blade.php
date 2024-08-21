@section('title', 'Lightcones in Honkai: Star Rail - Honkai: Star Rail | HoshiLab')
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
              Lightcones in Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail lightcone.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Light Cones
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Light Cones adalah jenis perlengkapan yang dapat dipakai oleh semua Karakter. Perlengkapan ini serupa dengan senjata di game lain dan memberikan bonus stat kepada Karakter yang memakainya. <br> <br>
              <img src="{{asset('storage/guidehsrimage/Lightcone content.png')}}" style="width: 30rem;">
              <br><br>
              Serupa dengan Karakter, Light Cones juga memiliki Level mulai dari 1 hingga 80. Mereka juga dapat dinaikkan levelnya dan naik kelas atau biasa disebut ascend. Dengan demikian, mereka akan meningkatkan bonus stat yang diberikan kepada Karakter yang dilengkapi. <br><br>
              Setiap Light Cone memiliki kelangkaannya sendiri yaitu 3★, 4★, atau 5★. <br> <br>
              Setiap Light Cone juga memiliki Light Cone Ability yang merupakan bonus pasif yang terkait dengan salah satu dari tujuh Path. Ability Light Cone dimulai dari Rank 1 dan dapat ditingkatkan ke Rank 5 dengan menggunakan fungsi Superimpose.
            Untuk menggunakan fungsi Superimpose, Anda harus mengeluarkan duplikat Light Cone yang sedang Anda tingkatkan. Setiap duplikat Light Cone yang Anda gunakan akan meningkatkan Peringkat Ability Light Cone sebesar 1. Perhatikan bahwa setiap Light Cone yang digunakan sebagai bahan Superimpose akan dikonsumsi dan dihancurkan. <br> <br>
            Meningkatkan Peringkat Ability Light Cone akan meningkatkan sebagian atau seluruh bagian numerik dari bonus yang diberikan. <br><br>
            Semua Light Cones dapat dipasang pada Karakter apa pun, namun hanya Karakter dengan Path yang sesuai dengan Light Cone yang dapat menggunakan Light Cone Ability. Ini berarti bahwa Karakter yang dilengkapi dengan Light Cone dari Path yang berbeda hanya akan mendapatkan bonus stat yang diberikan Light Cone dan bukan Ability Light Cone-nya. <br><br>
            Untuk melihat versi lengkap list lightcone yang tersedia dapat klik gambar di bawah ini: <br> <br>
            <div>
                <a href="{{ route('Member Lightcone Page') }}">
                    <img class="card-img-top" src="{{asset('storage/guidehsrimage/Lightcone content end.png')}}" alt="Card image cap" style="width:85px; height:85px; margin-right:10px;">
                </a><span style="color:white;">Light Cones List</span>
            </div>

            </div>
      </div>
  </div>
  <br>
</div>
@endsection
