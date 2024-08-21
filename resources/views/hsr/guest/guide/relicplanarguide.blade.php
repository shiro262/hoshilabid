@section('title', 'Relics & Planar in Honkai: Star Rail - Honkai: Star Rail | HoshiLab')
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
              Relics & Planar in Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail relicplanar.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Relics & Planar
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Relics adalah jenis perlengkapan dalam game ini dan berfungsi sebagai armor dan aksesori dalam game RPG tradisional. Memasang Relic pada Karaktermu akan memberikan berbagai peningkatan stat, mulai dari HP, ATK, hingga Speed. Relic akan memberikan sebagian besar peningkatan stat kepada Karaktermu. <br><br>
              <img src="{{asset('storage/guidehsrimage/relics.jpg')}}" style="width: 30rem;">
              <br><br>
              Ada 6 jenis Relic yang berbeda: <br>
                <ul>
                    <li>Heads</li>
                    <li>Hands</li>
                    <li>Body</li>
                    <li>Feet</li>
                    <li>Planar Sphere</li>
                    <li>Link Rope</li>
                </ul>
              Setiap Relic memiliki satu statistik utama dan hingga 4 sub-statistik. Bergantung pada jenis Relic, statistik utama yang mungkin adalah: <br>
                <ul>
                    <li>Head - HP (Angka)</li>
                    <li>Hands- ATK (Angka)</li>
                    <li>Body - HP%, ATK%, DEF%, Crit Rate%, Crit DMG%, Outgoing Healing Boost%, Effect Hit Rate%</li>
                    <li>Feet - HP%, ATK%, DEF%, Speed</li>
                    <li>Planar Sphere - HP%, ATK%, DEF%, Elemental Damage Boost*</li>
                    <li>Link Rope - HP%, ATK%, DEF%, Break Effect%, Energy Regen Rate%</li>
                </ul>
                <p class="card-text" style="font-style:italic;">
                    Note: bahwa Elemental Damage Boost akan menjadi salah satu dari 7 elemen yang memungkinkan. Ini bukan Elemental Damage Boost untuk semua elemen.
                </p> <br>
                Sub-statistik Relic dibuat secara acak, tetapi tidak boleh sama dengan stat utama Relic. Daftar sub-stat yang mungkin adalah:
                <ul>
                    <li>HP(Angka)</li>
                    <li>ATK(Angka)</li>
                    <li>DEF(Angka)</li>
                    <li>HP%</li>
                    <li>ATK%</li>
                    <li>DEF%</li>
                    <li>Crit Rate%</li>
                    <li>Crit DMG%</li>
                    <li>Effect Hit Rate%</li>
                    <li>Effect RES%</li>
                    <li>Break Effect%</li>
                    <li>Speed</li>
                </ul>
              <br>
              Relic juga dapat dinaikkan levelnya untuk meningkatkan bonus statistik utama, tetapi sub-statistiknya dihasilkan saat Anda mendapatkan item tersebut (atau saat Anda meningkatkannya) dan tidak dapat diubah dan substat yang diperoleh itu berupa acak. Level maksimum Relic ditentukan oleh kelangkaannya yang berkisar dari 2 Bintang hingga 5 Bintang. Semakin tinggi kelangkaan Relik, semakin tinggi pula statistik yang akan dimilikinya pada level dasar dan saat ditingkatkan.
              Selain itu, jika Relik memiliki kurang dari 4 sub-statistik, Relik tersebut akan mendapatkan sub-statistik baru secara acak. Jika Relic sudah memiliki 4 sub-statistik, sub-statistik acak akan bertambah secara acak.
              <br><br> <br>
              <p class="card-text">
                ▣ Set Effects
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                Relics dibuat tersedia dalam bentuk set dan membuat set yang sama dalam satu karakter akan memberikan bonus tambahan untuk Karakter. Meskipun demikian, penting untuk dicatat bahwa ada 2 jenis set:
                <ul>
                  <li>Relic Sets</li>
                  Set tersebut memberikan bonus 2 dan 4 buah dan hanya muncul di Relics Head, Hands, Body, dan Feet.
                  <li>Planetary Ornament Sets</li>
                  set tersebut hanya memberikan bonus 2 buah dan hanya muncul di Planar Sphere dan Link Rope Relics.
              </ul>
              Ini berarti Anda hanya dapat menggabungkan satu Set Relic dan satu Set Planetary Ornaments.
              <br><br>
              Untuk melihat versi lengkap list relic yang tersedia dapat klik gambar di bawah ini:
            <div>
                <a href="{{ route('Guest Relic Page') }}">
                    <img class="card-img-top" src="{{asset('storage/relicimage/Hunter of Glacial Forest.png')}}" alt="Card image cap" style="width:85px; height:85px; margin-right:10px;">
                </a><span style="color:white;">Relic List</span>
            </div>
            <br>
            Untuk melihat versi lengkap list planar yang tersedia dapat klik gambar di bawah ini:
            <div>
                <a href="{{ route('Guest Planar Page') }}">
                    <img class="card-img-top" src="{{asset('storage/planarimage/Izumo Gensei and Takama Divine Realm.png')}}" alt="Card image cap" style="width:85px; height:85px; margin-right:10px;">
                </a><span style="color:white;">Planar List</span>
            </div>
              </div>
      </div>
  </div>
  <br>
</div>
@endsection
