@section('title', 'Pra-Unduh Versi 2.2 Kini Telah Dibuka! - Honkai: Star Rail | HoshiLab')
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
            Pra-Unduh Versi 2.2 Kini Telah Dibuka!
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              06/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/praunduh.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                Halo, Trailblazer: <br><br>
                Pra-unduh Versi 2.2 telah dibuka. Trailblazer dapat mengunduh sebagian sumber data dengan mengikuti panduan berikut untuk masuk ke dalam game dengan lebih cepat setelah update dan maintenance versi. Karena ukuran sumber data yang cukup besar, kami sarankan agar Trailblazer mengunduh data dengan jaringan Wi-Fi.
                </p>
                <br>
                <p class="card-text" style="font-weight:bold">
                    Panduan Pra-Unduh
                </p>
                <li>PC</li>
                <p class="card-text" >
                    Buka launcher PC, di sebelah kiri tombol [Mulai Game] akan muncul tombol [Pra-Unduh Game], tekan [Segera Ambil] untuk memulai pengunduhan.
                </p>
                <p class="card-text" style="font-style: italic">
                    Note: Selama proses pra-unduh di perangkat PC, Trailblazer dapat terus memainkan game. <br><br>
                <li>Mobile (Android & IOS)</li>
                <p class="card-text" >
                    Buka game dan tekan ikon [Pra-Unduh Sumber Data] yang akan muncul di sudut kanan bawah antarmuka log in untuk mulai mengunduh.
                </p>
                <p class="card-text" style="font-style: italic">
                    Note: Selama proses pra-unduh di perangkat mobile, Trailblazer tidak dapat memainkan game. Harap Trailblazer atur waktu untuk melakukan pra-unduh. <br><br>

                <p class="card-text" style="font-weight:bold">
                    Pengingat Khusus
                </p>
                <li>Kru Express menyarankan Trailblazer untuk menyiapkan penyimpanan perangkat yang cukup sebelum melakukan pra-unduh dan melakukan unduhan dengan jaringan Wi-Fi.</li>
                <p class="card-text" >
                    Paket data pra-unduh perangkat PC sekitar 15 GB.
                </p>
                <p class="card-text" >
                    Paket data pra-unduh perangkat mobile (Android dan iOS) sekitar 11 GB.
                </p>
                <p class="card-text" style="font-style: italic">
                    Note: Paket pengisi suara yang sudah diunduh pada client akan memengaruhi ruang penyimpanan yang dibutuhkan untuk pra-unduh <br><br>
                <li>Setelah update versi selesai, perangkat mobile masih harus mengunduh client versi terbaru untuk memainkan versi terbaru.</li>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
