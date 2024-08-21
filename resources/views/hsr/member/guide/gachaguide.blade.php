@section('title', 'Gacha Systems in Honkai: Star Rail - Honkai: Star Rail | HoshiLab')
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
              Gacha Systems in Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail gacha.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Gacha Systems
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Honkai: Star Rail menggunakan sistem gacha sebagai cara utama pemain untuk mendapatkan Karakter dan Light Cone baru. Ini umumnya merupakan satu-satunya cara untuk mendapatkan Karakter dan Light Cone dengan kelangkaan tertinggi.
              <br><br>
              <p class="card-text">
                ▣ Warps
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                Warp adalah sebutan Honkai: Star Rail untuk banner gacha-nya. Untuk meluncur di gacha, atau melakukan warp , Anda harus menggunakan Stellar Jades, mata uang gacha, atau Pass / Special Pass yang merupakan tiket gacha.
              <br>
                <ul>
                    <li>Kamu dapat menukarkan 160 Stellar Jades dengan 1 Pass atau 1 Special Pass.</li>
                    <li>Pass digunakan pada Beginner Warp dan Standard Warp.</li>
                    <li>Special Pass digunakan pada Character Oriented Warp dan Light Cone Oriented Warp.</li>
                </ul>
                <br>
                Stellar Jade, Pass, dan Special Pass dapat diperoleh dari berbagai sumber dalam game seperti misi, event, dan toko-toko tertentu.
                <br> <br>
                Anda bisa mendapatkan hadiah gacha warp diantaranya:
                <ul>
                    <li>3★ Light Cones</li>
                    <li>4★ Light Cones</li>
                    <li>5★ Light Cones</li>
                    <li>4★ Karakter</li>
                    <li>5★ Karakter</li>
                </ul>
                Bintang menunjukkan kelangkaan Karakter atau Light Cone. Semakin tinggi jumlah bintang, semakin tinggi kelangkaannya (dan semakin sulit) untuk didapatkan.
                <br><br>
                4 ★ Jaminan: Jika pemain tidak mendapatkan Karakter 4 ★ atau Light Cone setelah 9 kali putaran, maka putaran ke-10 dijamin menjadi Karakter 4★ atau Light Cone. Penghitung ini diatur ulang setiap kali pemain mendapatkan Karakter 4★ atau Light Cone.
                <br><br>

                <p class="card-text">
                    ▣ Undying Embers & Undying Starlights
                    </p>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Undying Embers dan Undying Starlight adalah mata uang dalam game yang hanya dapat diperoleh dengan warping. Keduanya dapat digunakan di Embers Exchange dan Starlight Exchange untuk membeli Pass, Special Pass, meningkatkan material, dan sumber daya lainnya.
                    <br><br>
                    Anda bisa mendapatkan Undying Embers dengan mendapatkan 3★ Light Cone dari warping. Setiap 3★ Light Cone akan memberi Anda 20 Undying Embers.
                    <br><br>
                    Anda bisa mendapatkan Undying Starlight dari:
                    <ul>
                        <li>Mendapatkan 4★ Light Cone apa pun</li>
                        <p class="card-text">
                            8 Undying Starlight diberikan
                        </p>
                        <li>Mendapatkan 5★ Light Cone apa pun</li>
                        <p class="card-text">
                            40 Undying Starlight diberikan
                        </p>
                        <li>Mendapatkan duplikat Karakter 4★</li>
                        <p class="card-text">
                            Duplikat ke-1 hingga ke-6: 8 Undying Starlight dan 1 Eidolon untuk Karakter <br>
                            Duplikat ke-7 dan seterusnya: 20 Undying Starlight
                        </p>
                        <p class="card-text" style="font-style: italic">
                            Note: bahwa Anda tidak akan menerima Undying Starlight saat menarik Karakter Bintang 4 yang belum Anda miliki untuk pertama kalinya.
                        </p>
                        <li>Mendapatkan duplikat Karakter 5★</li>
                        <p class="card-text">
                            Duplikat ke-1 hingga ke-6: 40 Undying Starlight dan 1 Eidolon untuk Karakter tersebut <br>
                            Duplikat ke-7 dan seterusnya: 100 Undying Starlight
                        </p>
                        <p class="card-text" style="font-style: italic">
                            Note:bahwa Anda tidak akan menerima Undying Starlight saat menarik Karakter Bintang 5 yang belum Anda miliki untuk pertama kalinya.
                        </p>
                    </ul>

                    <p class="card-text">
                        ▣ Departure Warp
                        </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        <img src="{{asset('storage/guidehsrimage/departurewarp.png')}}" style="width: 35rem;">
                        <br><br>
                        Berikut beberapa informasi mengenai Departure warp banner:
                        <ul>
                            <li>Anda hanya dapat melakukan warp sebanyak 50 kali di Departure Warp, tetapi Anda dijamin akan mendapatkan satu Karakter 5★ dalam 50 kali warp tersebut</li>
                            <li>Anda tidak dapat melakukan satu kali warp di Departure Warp. Anda hanya dapat melakukan warp dalam kelipatan 10 (biasanya disebut sebagai sepuluh tarikan atau multi tarikan). Namun, Anda akan menerima diskon 20% setiap kali Anda melakukan warp, jadi biayanya hanya 8 Pass, bukan 10</li>
                            <li>Tingkat keberhasilan untuk menarik Karakter 5★ dari banner ini saat ini ditetapkan sebesar 0,6%</li>
                            <li>Tingkat keberhasilan untuk menarik Karakter 4★ dari banner ini saat ini ditetapkan sebesar 5,1%</li>
                            <li>Tidak ada karakter atau Light Cone yang memiliki peningkatan tingkat keberhasilan pada Warp ini</li>
                            <li>Anda hanya dapat menggunakan Star Rail Pass pada banner ini (tiket basic summon)</li>
                        </ul>
                        <p>Harap dicatat bahwa Anda dijamin akan mendapatkan satu Karakter 5★ dari banner  ini. Ketika Anda menarik 5★ sebelum mencapai batas pity (dipastikan dapat ketika sampai pity), Anda tidak akan mendapatkan yang lain dalam 50 pull Anda. Namun, Anda bisa mendapatkan lebih banyak Karakter 5★ dari banner ini, tetapi sangat jarang.</p>
                        <br>
                        <p class="card-text">
                            ▣ Standard Warp
                            </p>
                            <hr style="height:10px; border-width:5px; color:white;">
                            <img src="{{asset('storage/guidehsrimage/standardwarp.png')}}" style="width: 35rem;">
                            <br><br>
                            Berikut beberapa informasi mengenai Standard warp banner:
                            <ul>
                                <li>Tingkat keberhasilan untuk menarik Karakter 5★ dari banner ini saat ini ditetapkan sebesar 0,3% (dan 0,3% untuk Light Cone 5★)</li>
                                <li>Tingkat keberhasilan untuk menarik Karakter 4★ dari banner ini saat ini ditetapkan sebesar 5,1%</li>
                                <li>Anda dijamin akan mendapatkan Karakter 5★ atau Light Cone Karakter 5★ dalam 90 tarikan</li>
                                <li>Setelah Anda melakukan 300 tarikan, Anda akan mendapatkan dan dapat memilih satu 5★ yang tersedia di banner</li>
                                <li>Tidak ada karakter atau Light Cone yang memiliki peningkatan tingkat keberhasilan pada Warp ini</li>
                                <li>Anda hanya dapat menggunakan Star Rail Pass pada banner ini (tiket Basic summon)</li>
                            </ul>
                            <br>
                            <p class="card-text">
                                ▣ Character Oriented Warp
                                </p>
                                <hr style="height:10px; border-width:5px; color:white;">
                                <img src="{{asset('storage/guidehsrimage/characterwarp.png')}}" style="width: 35rem;">
                                <br><br>
                                Berikut beberapa informasi mengenai character warp banner:
                                <ul>
                                    <li>Satu Karakter 5★ dan tiga Karakter 4★ akan ditampilkan di Character Oriented Warp</li>
                                    <li>Tingkat keberhasilan untuk menarik Karakter 5★ dari banner ini saat ini ditetapkan sebesar 0,6%</li>
                                    <li>Tingkat keberhasilan untuk menarik Karakter 4★ dari banner ini saat ini ditetapkan sebesar 5,1%</li>
                                    <li>Jika Anda kalah dalam 50/50, maka Karakter 5★ kedua yang Anda tarik akan 100% menjadi Rate-up</li>
                                    <li>Anda dijamin akan mendapatkan 5★ dalam 90 kali tarikan (pity/ di angka 90 adalah guarantee mendapatkan 5★). Jadi, jika Anda kurang beruntung, Anda membutuhkan waktu paling banyak 180 tarikan untuk mendapatkan karakter Rate-up</li>
                                    <li>Anda hanya bisa menggunakan Star Rail Special Pass di banner ini (tiket special summon).</li>
                                </ul>
                                <p class="card-text">
                                    ▣ Light Cone Oriented Warp
                                    </p>
                                    <hr style="height:10px; border-width:5px; color:white;">
                                    <img src="{{asset('storage/guidehsrimage/lightconewarp.jpg')}}" style="width: 35rem;">
                                    <br><br>
                                    Berikut beberapa informasi mengenai Light Cone warp banner:
                                    <ul>
                                        <li>Satu Light Cone 5★ dan tiga Light Cone 4★ akan ditampilkan pada Light Cone Oriented Warp yang diberikan</li>
                                        <li>Tingkat keberhasilan untuk menarik Light Cone 5★ dari banner ini saat ini ditetapkan pada 0,8%</li>
                                        <li>Tingkat keberhasilan untuk menarik Light Cone 4★ dari banner ini saat ini ditetapkan pada 6,6%</li>
                                        <li>Setelah Anda menarik Light Cone 5★, Anda memiliki 75% peluang untuk menjadi Rate-up</li>
                                        <li>Jika Anda kalah dalam rate-up, maka Light Cone 5★ kedua yang Anda tarik akan 100% menjadi Rate-up</li>
                                        <li>Anda dijamin akan mendapatkan 5★ dalam 80 kali tarikan (pity/ di angka 80 adalah guarantee mendapatkan 5★). Jadi, jika Anda kurang beruntung, Anda membutuhkan waktu paling banyak 160 tarikan untuk mendapatkan Light Cone Rate-up</li>
                                        <li>Anda hanya bisa menggunakan Star Rail Special Pass di banner ini (tiket special summon)</li>
                                    </ul>

            </div>
      </div>
  </div>
  <br>
</div>
@endsection
