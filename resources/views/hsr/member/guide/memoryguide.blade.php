@section('title', 'Forgotten Hall (Memory & Memory of Chaos) - Honkai: Star Rail | HoshiLab')
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
            Forgotten Hall (Memory & Memory of Chaos)
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail moc.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Forgotten Hall
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Forgotten Hall adalah mode permainan yang tujuannya adalah mengalahkan sekelompok musuh dalam giliran sesedikit mungkin. Setelah menyelesaikan stage Forgotten Hall, Anda akan diberikan antara 0 hingga 3 bintang untuk stage tersebut, tergantung pada berapa banyak giliran yang Anda perlukan untuk mengalahkan musuh di stage tersebut. Semakin banyak bintang yang Anda dapatkan, semakin baik hadiah yang Anda terima.
              <br><br>
                <p class="card-text">
                    Ini adalah mode permainan yang paling menantang dengan tahap akhir dianggap sebagai konten permainan akhir yang tersedia saat ini. Mereka yang memainkan Genshin Impact pasti sangat familiar dengan mode ini karena setara dengan Abyss dari Genshin Impact.
                </p>
                <p class="card-text">
                    Forgotten Hall dibagi menjadi dua bagian: Memory dan Memory of Chaos.
                </p>
                Memory terdiri dari 15 stage dan memberikan hadiah satu kali berupa Stellar Jades setelah selesai.
                <ul>
                    <li>Tahap-tahap selanjutnya dari Memory membutuhkan penggunaan dua tim yang terdiri dari maksimal 4 Karakter.</li>
                </ul>
                Memory of Chaos terdiri dari 10 stage dan memberikan hadiah Stellar Jades setelah selesai.
                <ul>
                    <li>Tahap Memory of Chaos lebih menantang daripada tahap Memory.</li>
                    <li>Tahap Memory of Chaos di-reset secara berkala, sehingga pemain dapat menyelesaikannya lagi untuk mendapatkan Stellar Jades tambahan.</li>
                </ul>
              <br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Memory Turbulence
              </p>
              <img src="{{asset('storage/guidehsrimage/Turbulence.png')}}" style="width: 35rem; padding-left:30px;">
              <br><br>
              <p class="card-text" style="padding-left:30px;">
                Memory Turbulence adalah efek khusus yang mempengaruhi musuh atau karakter Anda selama pertempuran. Setiap stage memiliki Memory yang berbeda dan sering kali Anda perlu membangun tim di sekitarnya (dan musuh) untuk melewati stage tersebut.
              </p>
              <br>
              <p class="card-text">
                ▣ Memory of Chaos
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                Memory of Chaos adalah mode permainan dalam Honkai Star Rail yang menawarkan pengalaman permainan yang berbeda dari mode cerita utama. Dalam mode ini, pemain akan dihadapkan pada serangkaian tantangan dan musuh yang harus diatasi dengan strategi dan keahlian yang baik.
                <br><br>
                    <p class="card-text">
                        Dalam Memory of Chaos, pemain akan menempuh serangkaian lantai atau tingkat yang semakin sulit seiring dengan kemajuan. Setiap lantai akan menawarkan berbagai jenis musuh yang harus dikalahkan, dan pemain harus menggunakan karakter dan strategi yang tepat untuk menghadapinya.
                    </p>
                    <p class="card-text">
                        Selain itu, terdapat juga elemen permainan tambahan, seperti batasan waktu, kondisi khusus, dan tantangan tertentu yang harus diselesaikan untuk maju ke tingkat berikutnya. Pemain dapat menggunakan berbagai item dan keahlian karakter untuk membantu mereka dalam menghadapi tantangan-tantangan ini.
                    </p>
                    <p class="card-text">
                        Memory of Chaos menawarkan pengalaman bermain yang menantang dan mendebarkan, serta kesempatan untuk menguji keahlian dan strategi pemain dalam menghadapi musuh-musuh yang kuat.
                    </p>

                    <p class="card-text" style="padding-left:30px; font-weight:bold;">
                        Reward
                    </p>
                    <p class="card-text" style="padding-left:30px; ">
                        Memory of chaos ini biasanya berupa event dan bakal direset secara berkala sehingga pemain dapat menyelesaikannya lagi untuk mendapatkan Stellar Jades tambahan. Namun Memory of chaos instan terbuka stagenya sampai stage 7. Player dapat instan menghadapi stage 7 dengan tujuan membuka stage berikutnya.
                    </p>
                    <img src="{{asset('storage/guidehsrimage/Rewardmoc.jpg')}}" style="width: 35rem; padding-left:30px;">
                    <br><br>
                    <p class="card-text" style="padding-left:30px; ">
                        Hadiah akan diperoleh dari total akumulasi Bintang pada event Memory of chaos yang sedang berlangsung ini.
                    </p>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
