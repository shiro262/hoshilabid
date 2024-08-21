@section('title', 'Simulated Universe - Honkai: Star Rail | HoshiLab')
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
              Simulated Universe
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail simulated.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Overview
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Simulated Universe adalah mode permainan roguelike di mana pemain akan membangun tim yang terdiri dari empat Karakter untuk menantang musuh di dunia tertutup dengan tujuan untuk menyelesaikannya dengan mengalahkan bos di akhir dunia tertutup.
              <br><br>
              <img src="{{asset('storage/guidehsrimage/overview.jpg')}}" style="width: 35rem;">
              <br> <br>
                <p class="card-text">
                    Mode permainan ini akan terbuka sesaat setelah Anda menyelesaikan side quest yang diberikan oleh Herta setelah Anda menyelesaikan misi tutorial dan dapat dimasuki melalui Master Control Zone di Stasiun Luar Angkasa Herta.
                </p>
                <p class="card-text">
                    Simulated Universe dibagi menjadi beberapa node yang disebut Worlds. Setiap World adalah sekumpulan stage semi acak yang berkisar dari stage pertarungan, tempat istirahat, hingga stage event teks acak yang berpuncak pada stage boss di akhir setiap World.
                </p>
                <p class="card-text">
                    Anda memulai dengan hanya membuka World 1 dan dapat membuka World lainnya saat Anda maju melalui permainan dan mengalahkan bos di akhir setiap World. Mulai dari World 3, setiap World juga akan memiliki sejumlah Tingkat Kesulitan dengan masing-masing Tingkat Kesulitan menawarkan musuh yang lebih menantang dan hadiah yang lebih baik. Note: bahwa Anda hanya perlu menyelesaikan Tingkat Kesulitan pertama di sebuah World untuk membuka World berikutnya.
                </p>
              <br>
              <p class="card-text">
                ▣ Accessing Simulated Universe
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehsrimage/accessing.jpg')}}" style="width: 35rem;">
                <br><br>
                Untuk memasuki Simulated Universe, Anda harus pergi ke Kantor Herta di Zona Kendali Utama di Stasiun Luar Angkasa Herta yang terletak di bagian kiri bawah area. Setelah berinteraksi dengan portal Simulated Universe, Anda akan dapat memilih World Simulated Universe yang ingin Anda tantang. Dari sini, Anda harus memilih empat Karakter dari daftar Anda untuk dibawa ke Simulated Universe. Keempat Karakter ini akan menjadi satu-satunya yang dapat Anda gunakan saat berada di dalam Simulated Universe, meskipun Anda dapat menambahkan lebih banyak Karakter ke dalam tim saat Anda mencapai salah satu tempat peristirahatan Simulated Universe.
                <br><br><br>

                <p class="card-text">
                    ▣ Simulated Universe Ability Tree
                    </p>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidehsrimage/abilitytree.jpg')}}" style="width: 35rem;">
                    <br><br>
                    Poin Ability dapat digunakan untuk membuka peningkatan permanen dalam permainan Simulated Universe. Mulai dari memberikan bonus stat kepada tim Anda saat berada di dalam Simulated Universe hingga membuka ability baru yang dapat Anda gunakan selama menjalankan Simulated Universe.
                    <br><br><br>

                <p class="card-text">
                    ▣ Simulated Universe Path Resonance
                </p>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidehsrimage/pathsimulated.png')}}" style="width: 35rem;">
                    <br><br>
                    <p class="card-text">
                        Setelah membuka node Path Resonance di Simulated Universe Ability Tree, Anda akan diminta untuk memilih Path saat Anda memulai Simulated Universe yang baru. Saat ini ada 7 Path berbeda yang dapat Anda pilih dan sesuai dengan 7 Path of the Blessings yang dapat Anda peroleh dalam mode permainan ini.
                    </p>
                    <p class="card-text">
                        Memilih sebuah Path akan memberi Anda buff kecil untuk seluruh party serta meningkatkan peluang Blessings dari Path tersebut akan muncul selama menjalankan Simulated Universe. Selain itu, Path yang Anda pilih juga akan menentukan kemampuan Path Resonance mana yang dapat Anda peroleh selama berlari. Setelah Anda memperoleh 3 Blessings dari Path yang Anda pilih, Anda akan membuka kemampuan Path Resonance yang sesuai yang merupakan kemampuan aktif yang kuat yang dapat Anda picu selama pertempuran kapan saja selama terisi penuh.
                    </p>
                    <p class="card-text">
                        Saat Anda melaju lebih jauh di Simulated Universe Ability Tree, Anda juga akan membuka kemampuan untuk meningkatkan kemampuan Path Resonance. Setiap kemampuan Path Resonance memiliki 3 peningkatan berbeda yang dapat Anda pilih. Anda dapat memilih peningkatan pertama setelah mendapatkan 6 Blessings dari Path yang sesuai, peningkatan kedua setelah mendapatkan 10 Blessings dari Path yang sesuai, dan peningkatan ketiga setelah mendapatkan 14 Blessings dari Path yang sesuai.
                    </p>

                    <br>

                    <p class="card-text">
                        ▣ Rewards
                    </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        <img src="{{asset('storage/guidehsrimage/reward.jpg')}}" style="width: 35rem;">
                        <br><br>
                        <p class="card-text">
                            Menyelesaikan mode permainan ini akan memberi Anda Poin Simulated Universe dan Poin Ability. Jumlah poin yang diberikan tergantung pada World yang Anda tantang dan berapa banyak stage yang berhasil Anda selesaikan sebelum tim Anda dihabisi atau Anda mengalahkan bos di akhir World. Semakin sulit stage yang Anda hadapi, semakin banyak Simulated Universe Points dan Ability Points yang akan Anda dapatkan. Perhatikan bahwa Anda akan diberikan Simulated Universe Points dan Ability Points, meskipun dengan jumlah yang lebih rendah, bahkan jika Anda gagal menyelesaikan suatu misi.
                        </p>
                        <p class="card-text">
                            Setelah mencapai pencapaian Simulated Universe Point tertentu, Anda akan dapat mengklaim hadiah seperti Stellar Jades dan Herta Bonds (mata uang yang digunakan di Toko Herta). Simulated Universe Point diatur ulang kembali ke 0 setiap minggu, sehingga Anda dapat mengklaim hadiah yang tersedia setiap minggu.
                        </p>
                        <p class="card-text">
                            Dimulai dari World 3, Anda juga dapat menggunakan Trailblaze Power untuk mendapatkan Planetary Ornamen selama menjalankan Simulated Universe. Setiap World menawarkan dua set Planetary Ornament yang berbeda dengan Tingkat Kesulitan yang lebih tinggi menawarkan Planetary Ornament yang lebih langka. Setelah mengalahkan musuh di tahap Domain - Elite atau tahap Domain - Boss, Anda akan dapat berinteraksi dengan terminal dan menghabiskan 40 Trailblaze Power atau Immersifier untuk mendapatkan drop item Planetary Ornament. Immersifier dapat diperoleh dari hadiah Poin Simulated Universe mingguan atau dengan menghabiskan Trailblaze Power. Setiap Immersifer membutuhkan 40 Trailblaze Power untuk membuatnya dan maksimal 8 Immersifier dapat disimpan dalam satu waktu. Terminal di tahap Domain - Elite hanya dapat berinteraksi satu kali, sedangkan terminal di tahap Domain - Boss dapat berinteraksi dua kali. Perhatikan bahwa berinteraksi dengan terminal ini untuk mendapatkan Planetary Ornaments adalah opsional. Anda bisa langsung melanjutkan ke stage berikutnya atau keluar dari permainan jika Anda tidak ingin menghabiskan Trailblaze Power atau Immersifier.
                        </p>

            </div>
      </div>
  </div>
  <br>
</div>
@endsection
