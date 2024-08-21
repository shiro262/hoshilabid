@section('title', 'Combat & Exploration - Honkai: Star Rail | HoshiLab')
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
              Combat & Exploration Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail combat.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Exploration
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Pemain dapat berkeliaran dan menjelajahi berbagai area di peta Honkai: Star Rail untuk mencari kotak harta karun, musuh, teka-teki, dan banyak lagi. Namun, setiap area merupakan zona tersendiri, jadi akan ada layar pemuatan saat bepergian di antara berbagai area di dunia luar.
              <br><br>
              Saat menjelajahi dunia, Anda akan memilih satu karakter dari empat karakter dalam tim untuk menjadi karakter aktif. Karakter aktif adalah karakter di layar yang Anda kendalikan. Anda dapat mengganti karakter aktif kapan saja saat berada di luar pertempuran.
              <br><br>
              Di luar area kota, akan ada musuh yang berkeliaran di sekitar peta yang akan menyerang dan mengejar Anda jika Anda terlalu dekat dengan mereka.
              <br><br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Peta interaktif
              </p>
              <p class="card-text" style="padding-left:30px;">
                Jika Anda kesulitan dalam menemukan atau menargetkan sebuah lokasi atau sekadar menavigasi beberapa peta, Anda dapat menggunakan Peta Interaktif sebagai panduan arah jalannya karakter.
              </p>
              <img src="{{asset('storage/guidehsrimage/map.jpg')}}" style="width: 35rem; padding-left: 30px;">
              <br> <br>
              <p class="card-text" style="padding-left:30px;">
                Peta terdapat dalam pojok kiri atas saat player sedang bermain Honkai: star rail. Peta juga dapat diklik dan menampilkan full screen dan detail dari bentuk nya peta yang sedang ditempati.
              </p>
              <br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Memulai Pertempuran
              </p>
              <p class="card-text" style="padding-left:30px;">
                Untuk memulai pertempuran di dunia luar, dekati musuh dan gunakan kemampuan Basic ATK Anda.
              </p>
              <p class="card-text" style="padding-left:30px;">
                Beberapa kemampuan Teknik Karakter juga dapat digunakan untuk memulai pertarungan dan ketika digunakan, akan menyebabkan Karakter melakukan serangan khusus di awal pertarungan. Perhatikan bahwa menggunakan kemampuan Teknik Karakter untuk memulai pertarungan akan menghabiskan biaya Teknik. Anda dapat menyimpan 3 muatan Teknik pada awalnya. Namun, jumlah maksimum biaya Teknik yang dapat Anda simpan akan meningkat seiring dengan naiknya Level Trailblazer. Pengisian daya Teknik dapat dipulihkan dengan memecahkan kontainer ungu di dunia luar. Menghancurkan salah satu kontainer ini akan memulihkan 2 muatan Teknik. Wadah ini umumnya dapat ditemukan di dekat fast travel point (yaitu Space Anchors dan pintu masuk Calyx) yang berada di luar zona kota.
              </p>
              <p class="card-text" style="padding-left:30px;">
                Pertarungan juga dapat dimulai ketika musuh yang mengejar Anda berhasil mengejar Anda. Jika Anda gagal mengenai mereka dengan kemampuan Serangan Dasar atau Teknik sebelum mereka melakukan kontak dengan Anda, maka Anda akan memasuki pertempuran dalam keadaan  “Ambushed ”. Dalam kondisi ini, musuh akan bertindak sebelum Anda bertindak.
              </p>
              <br><br>
              <p class="card-text">
                ▣ Combat
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                Honkai: Star Rail menggunakan sistem pertarungan berbasis giliran gaya JRPG. Anda membangun tim yang terdiri dari 4 Karakter dan membawa mereka ke dalam pertempuran. Dalam pertempuran, Karakter dan musuh akan beraksi dalam urutan giliran yang ditentukan oleh stat Speed mereka. Stat Speed juga menentukan berapa lama waktu yang dibutuhkan untuk beraksi lagi.
                <br><br>
                <p class="card-text" style="padding-left:30px; font-weight:bold;">
                    Pra-Pertarungan
                  </p>
                  <p class="card-text" style="padding-left:30px;">
                    Saat menjelajah di dunia luar, menyerang musuh yang berkeliaran atau tertangkap oleh mereka akan memulai urutan pertarungan. Tergantung pada kondisi bagaimana pertempuran dimulai, baik tim Anda atau musuh mungkin akan dirugikan.
                  </p>
                  <p class="card-text" style="padding-left:30px;">
                    Jika Anda memulai pertempuran dengan menyerang musuh dengan Basic Attack atau Teknik, maka pertempuran akan dimulai secara normal. Namun, jika elemen karakter aktif yang memulai pertempuran adalah salah satu yang lemah dari musuh, maka tim Anda akan memulai pertempuran dengan status Weakness. Saat memulai pertempuran dalam kondisi ini, bar Toughness musuh akan berkurang, membuatnya lebih mudah untuk Weakness Break mereka. Pada dasarnya, hal ini memungkinkan tim Anda untuk lebih mudah dalam memberikan damage kepada musuh.
                  </p>
                  <img src="{{asset('storage/guidehsrimage/Weakness.jpg')}}" style="width: 35rem; padding-left: 30px;">
                  <br><br>
                  <p class="card-text" style="padding-left:30px;">
                    Di sisi lain, jika musuh berhasil menangkapmu dan kamu gagal mengenai mereka dengan kemampuan Basic Attack atau Technique sebelum mereka melakukan kontak, maka kamu akan memasuki pertempuran dalam kondisi Ambushed. Dalam kondisi ini, musuh akan bertindak sebelum Anda bertindak.
                  </p>
                  <img src="{{asset('storage/guidehsrimage/Ambushed.jpg')}}" style="width: 35rem; padding-left: 30px;">
                  <br><br><br>
                  <p class="card-text" style="padding-left:30px; font-weight:bold;">
                      Musuh
                    </p>
                    <p class="card-text" style="padding-left:30px;">
                        Musuh di Honkai: Star Rail memiliki dua bar yang berbeda untuk mewakili ketahanan mereka: HP dan Ketangguhan(Toughness).
                      </p>
                      <p class="card-text" style="padding-left:30px;">
                        Bar HP adalah bar berwarna merah dan menunjukkan berapa banyak kerusakan yang dapat mereka terima sebelum jatuh dalam pertempuran. Bar HP akan turun setiap kali unit menerima damage.
                      </p>
                      <p class="card-text" style="padding-left:30px;">
                        Di sisi lain, bar Ketangguhan (bar putih) hanya dapat rusak oleh serangan elemen yang lemah terhadap musuh.
                      </p>
                      <p class="card-text" style="padding-left:30px;">
                        Musuh memiliki satu set kelemahan elemen (umumnya 2 atau 3) yang ditampilkan di atas kepala mereka. Menyerang musuh dengan serangan elemen yang lemah terhadapnya akan mengurangi Ketangguhannya (bar putih di atas HP-nya). Anda dapat memberikan Weakness Break pada musuh dengan mengurangi Toughness-nya menjadi 0. Musuh yang telah terkena Weakness Break akan menderita damage tambahan dan debuff berdasarkan elemen serangan yang mengurangi Toughness-nya menjadi 0.


            </div>
      </div>
  </div>
  <br>
</div>
@endsection
