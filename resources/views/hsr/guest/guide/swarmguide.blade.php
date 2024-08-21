@section('title', 'Swarm Disaster - Honkai: Star Rail | HoshiLab')
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
              Swarm Disaster
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail swarm.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Swarm Disaster
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Swarm Disaster adalah perluasan dari mode Simulated Universe yang tersedia di Honkai: Star Rail yang memperkenalkan musuh-musuh baru, Path, dan banyak hadiah. Anda dapat mengakses mode ini di menu utama Simulated universe dan meskipun premis mode ini mirip dengan mode dasar - dengan sifat roguelite-nya - mode ini sebenarnya jauh lebih sulit dan dapat dianggap sebagai konten tersulit yang tersedia di dalam game.
              <br><br>
              <img src="{{asset('storage/guidehsrimage/swarm.png')}}" style="width: 35rem;">
              <br><br>
                <p class="card-text">
                    Sebagian karena pada tingkat kesulitan tertinggi (ada 5) yang tersedia di Swarm Disaster, Anda akan bertarung melawan musuh level 95. Sebagai perbandingan, dalam Memory of Chaos, stage terakhir menampilkan musuh level 90 yang berarti mereka memiliki lebih banyak HP, tetapi Anda juga melakukan lebih sedikit damage karena formula damage memperhitungkan perbedaan antara level karakter dan musuh yang Anda hadapi.
                </p>
                <p class="card-text">
                    Mode Swarm Disaster menampilkan perkembangan dan pohon keterampilan terpisah yang memberikan statistik gratis kepada karakter Anda untuk melakukan berbagai tantangan - yang merupakan perubahan lain dibandingkan dengan pohon keterampilan Simulated Universe dasar, di mana Anda hanya perlu memainkan mode ini untuk membuka node. Dan kami sangat menyarankan untuk fokus pada kemajuan menuruni pohon, karena itu akan membuat mode ini jauh lebih mudah. Anda dapat memeriksa semua bonus yang tersedia yang dapat Anda peroleh di sana di bagian bawah panduan ini di bagian yang didedikasikan untuk bonus tersebut.
                </p>
                <p class="card-text">
                    Selain hadiah besar yang dapat Anda peroleh dalam mode ini (termasuk 4.500 Stellar Jades), Anda juga dapat membuka Path of Propagation di Simulated Universe. Jalur ini meningkatkan Basic Attacks dan juga membantu manajemen Skill Point yang membuatnya sempurna untuk Imbibitor Lunae dan Qingque yang baru saja dirilis.
                </p>

                <p class="card-text">
                    ▣ Path
                    </p>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidehsrimage/pathswarm.png')}}" style="width: 35rem;">
                    <br><br>
                    <p class="card-text">
                        Saat pertama kali memasuki mode Swarm Disaster, Anda harus memilih salah satu Path yang tersedia dan mirip dengan Simulated Universe dasar, tidak semua Path terbuka saat Anda mulai memainkan mode ini dan Anda harus maju melalui kesulitan dan cerita untuk mendapatkan akses ke Path tersebut. Pada awalnya, Anda hanya akan memiliki akses ke Path Destruction (selama tutorial) dan tak lama kemudian Anda akan membuka Path Preservation, Abundance, dan Hunt.
                    </p>
                    <p class="card-text">
                        Path yang kamu pilih tidak hanya akan memengaruhi Blessings yang ingin kamu fokuskan dan gaya bermainmu, tetapi juga akan memengaruhi cara kamu berinteraksi dengan Board dan Domain - yang merupakan mekanisme utama mode Swarm Disaster.
                    </p>
                    <img src="{{asset('storage/guidehsrimage/domainswarm.png')}}" style="width: 35rem;">
                    <br><br>


              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                The Best Path
              </p>
              <p class="card-text" style="padding-left:30px;">
                Tidak ada satu Path terbaik yang akan bekerja sama baiknya untuk semua orang. Setiap akun berbeda dan ini akan menentukan Path mana yang harus Anda mainkan - di bawah ini Anda akan menemukan beberapa tips umum untuk Path yang harus Anda pilih:
              </p>
              <ul>
                  <li>Abundance</li>
                  Path tingkat pemula yang bagus yang dapat digunakan pada akun apa pun - dan mekanisme khususnya akan memungkinkanmu mengumpulkan lebih banyak Blessings daripada Path lainnya, membuat timmu jauh lebih kuat. Dan karena kamu hanya membutuhkan seorang Healer dalam tim untuk menggunakannya, Path ini mudah digunakan dan sangat dapat diandalkan. Kami menemukan bahwa Path ini adalah yang terbaik untuk mengatasi kesulitan 5 yang ditakuti.
                  <br><br>
                  <li>Preservation</li>
                  Path tingkat pemula alternatif yang kali ini berfokus pada Perisai. Meskipun Anda dapat membuatnya bekerja dengan Fire Trailblazer, ia benar-benar mulai bersinar dengan Gepard karena Perisai miliknya jauh lebih kuat - dan mereka akan mengubah Path yang defensif ini menjadi monster yang ofensif. Mekanik khususnya juga akan memungkinkanmu untuk mendapatkan lebih banyak Blessings daripada kebanyakan Path lainnya (tetapi lebih sedikit daripada Abundance).
                  <br><br>
                  <li>Nihility</li>
                  Jika kamu memiliki Kafka, Path ini adalah pilihan terbaik untukmu. Nihility Path sudah menjadi salah satu pilihan terkuat untuk Simulated Universe dasar karena Blessings-nya sangat kuat dan hal yang sama dapat dikatakan tentang Performanya di Swarm Disaster. Namun, kamu dapat mencoba membuatnya bekerja tanpa Kafka dengan menggunakan Sampo atau Serval, tetapi Kafka hanya meningkatkannya ke tingkat yang lebih tinggi.
                  <br><br>
                  <li>Hunt</li>
                  Offense adalah pertahanan terbaik adalah pepatah umum dan ini juga dapat bekerja dengan baik di Swarm Disaster - tetap saja, meskipun pada tingkat kesulitan yang lebih rendah, Path ini akan memungkinkan Anda untuk menjalankan plane dengan cepat, pada tingkat kesulitan yang lebih tinggi, kekuatan ofensifnya mungkin tidak cukup untuk melakukan auto dan chill dengan aman. Jadi, gunakanlah Path ini dengan hati-hati.
                  <br><br>
              </ul>
              <p class="card-text">
                ▣ Tips & Tricks
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                Berikut tips & tricks yang dapat membantu dalam melalui mode game swarm disaster ini:
                <ul>
                    <li>Fokuslah untuk menyelesaikan tantangan di Trail of Pathstrider karena statistik bonus yang mereka sediakan akan membuat hidup Anda lebih mudah.</li> <br>
                    <li>Anda harus bermain setidaknya pada Tingkat Kesulitan 3 untuk dapat menyelesaikan tantangan di Trail of Pathstrider (melewati tantangan awal) - beberapa di antaranya bahkan mengharuskan Anda untuk menyelesaikannya pada Tingkat Kesulitan 4.</li> <br>
                    <li>Pastikan Anda memeriksa bonus yang Anda dapatkan dari Communing Trail untuk menghindari overcapping statistik Anda, misalnya jika Anda memiliki Crit Rate mendekati 100%, biasanya pertimbangkan untuk mengganti bagian Crit karena Communing Trail memberi Anda 18% lebih lanjut pada peringkat maksimum.</li> <br>
                    <li>Pada awalnya, meskipun kamu dapat mencapai tingkat kesulitan 3 secara otomatis dengan tim yang layak, namun untuk tingkat yang lebih tinggi kamu harus bermain secara manual.</li> <br>
                    <li>Pilihlah Path yang sesuai dengan kekuatan akun Anda dan juga tujuan yang ingin Anda capai. Jika Anda mencoba menyelesaikan misi Pathstrider yang mengharuskan Anda membunuh Trotters, pilihlah Hunt, jika Anda perlu membunuh musuh secara berurutan, pilihlah Destruction. Semua jalur dapat digunakan, jadi pastikan untuk bereksperimen</li> <br>
                    <li>Pastikan untuk menggunakan dua dukungan defensif dalam tim Anda untuk membuat perjalanan Anda lebih aman dan lancar - gunakan jenis dukungan pro-aktif (Shielder/Taunt) dan re-aktif (Healer) untuk mendapatkan efek terbaik.</li> <br>
                    <li>Dalam Swarm Disaster, kamu mendapatkan peningkatan besar-besaran pada sebagian besar statistik pertempuranmu seperti peningkatan DMG, Crit Rate, Crit Dmg, dan ATK% - karena alasan ini unit Harmony menjadi sedikit kurang berharga karena keuntungan yang semakin berkurang. DEF shred, RES shred dan menyebabkan musuh menerima kerusakan yang lebih besar jarang terjadi dari Berkah dan bonus dadu membuat unit Nihility relatif lebih berharga. Jadi, memiliki sumber DEF Shred dapat secara drastis meningkatkan hasil damage tim kamu (Pela dan Silver Wolf adalah pilihan kamu di sini).</li> <br>
                    <li>Pertimbangkan untuk menjalankan komposisi DPS ganda. Berkat buff stat besar yang dapat kamu peroleh dari Communing Trail dan banyak Blessings dan Dice yang memberi kamu banyak Skill Points, kamu dapat bermain dengan dua DPS dalam tim kamu.</li> <br>
                    <li>Pastikan kamu waspada terhadap Blessing defensif yang sangat kuat meskipun mereka bukan bagian dari Path-mu. Ancaman utama dalam bencana Swarm adalah terkena 1 tembakan atau kehabisan HP sebelum musuh jatuh.</li> <br>
                    <li>Cobalah untuk mengaktifkan setidaknya satu bonus Interplay karena efek tambahan yang ditambahkan ke skill Resonance akan membuat perbedaan besar. Dan kamu sebenarnya dapat mengaktifkan kedua Interplay dalam satu putaran yang sama.</li> <br>
                    <li>Imbibitor Lunae adalah karakter terbaik untuk digunakan dalam acara mini Trotter dan menghancurkan vas - Tekniknya memungkinkan dia untuk mengelilingi peta dengan mudah.</li>
                </ul>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
