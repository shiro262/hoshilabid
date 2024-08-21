@section('title', 'Pure Fiction - Honkai: Star Rail | HoshiLab')
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
            Pure Fiction
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail pure.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Overview
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Pure Fiction adalah mode permainan di mana Anda akan mengumpulkan 2 tim yang berbeda untuk bertarung melawan gelombang musuh yang tidak terbatas dan mencoba mengalahkan sebanyak mungkin musuh dalam batas waktu 4 siklus turn. Menyelesaikan mode permainan ini akan memberi Anda hadiah seperti Stellar Jades dan Jade Feathers, mata uang yang digunakan di toko Jokes Come True.

              <br><br> <br>

                <p class="card-text">
                ▣ Accessing Pure Fiction
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehsrimage/acessingpure.png')}}" style="width: 35rem;">
                <br><br>
                Mode permainan ini akan terbuka setelah menyelesaikan Youci's Clever Decor Adventure Mission, setelah itu, mode ini dapat diakses melalui Interastral Peace Guide atau dengan menuju ke penanda Pure Fiction di area Exalting Sanctum yang terletak di peta Xianzhou Luofu.
                <br><br><br>

                <p class="card-text">
                    ▣ Stages
                    </p>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidehsrimage/stagespure.png')}}" style="width: 35rem;">
                    <br><br>
                    Ada total 4 stage yang bisa Anda tantang. Di setiap stage, 2 tim Anda akan bertarung dalam 2 pertempuran terpisah dengan tim pertama bertarung di satu pertempuran dan tim kedua bertarung di pertempuran lainnya. Musuh akan muncul tanpa batas di setiap pertempuran. Memberikan damage dan mengalahkan mereka akan memberi Anda poin. Jumlah poin yang Anda miliki di akhir dua pertempuran akan menentukan hadiah yang Anda dapatkan. Semakin tinggi poin Anda, semakin banyak hadiah yang akan Anda dapatkan.
                    <br><br><br>

                <p class="card-text">
                    ▣ Whimsicality & Cacophony
                </p>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidehsrimage/cacophony.png')}}" style="width: 35rem;">
                    <br><br>
                    <p class="card-text">
                        Anda akan memiliki total 4 siklus giliran untuk mengalahkan musuh sebanyak mungkin. Oleh karena itu, disarankan untuk membawa tim yang dapat memberikan kerusakan AoE yang signifikan pada mode permainan ini. Penting juga untuk memperhatikan Whimsicality dan Cacophony yang berlaku. Whimsicality adalah efek pasif global yang aktif selama pertempuran berlangsung yang biasanya akan mendorong penggunaan tipe tim tertentu. Cacophony adalah satu set dari 3 efek pasif yang berbeda yang dapat kamu pilih selama fase pembentukan tim. Kamu dapat memilih 1 dari 3 Cacophony yang tersedia untuk 2 tim kamu, meskipun kamu harus memilih yang berbeda untuk setiap tim. Penggunaan efek Whimsicality dan Cacophony secara efektif akan memberikan dorongan besar bagi kekuatan tim Anda dalam mode permainan ini.
                    </p>
                    <p class="card-text">
                        Mirip dengan mode permainan Memory of Chaos, tahapan Pure Fiction akan diatur ulang secara berkala. Setelah setiap pengaturan ulang, progres Anda dalam mode permainan akan diatur ulang kembali ke awal dan Anda akan dapat menantang tahapan untuk mendapatkan hadiah Stellar Jades dan Jade Feather lagi. Setiap reset Pure Fiction juga akan mengubah Whimsicality dan Cacophony selama durasi siklus tersebut.
                    </p>

            </div>
      </div>
  </div>
  <br>
</div>
@endsection
