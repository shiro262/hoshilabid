@section('title', 'Characters in Honkai: Star Rail - Honkai: Star Rail | HoshiLab')
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
              Characters in Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail character.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Characters
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Karakter adalah unit yang dapat dimainkan di Honkai: Star Rail. Mereka diperoleh terutama melalui Warps, sistem gacha game. Namun, beberapa Karakter dapat diperoleh secara gratis melalui misi atau event dalam game.
              <br><br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Statistik Karakter
              </p>
              <ul>
                  <li>HP - Berapa banyak kerusakan yang dapat diterima Karakter sebelum jatuh dalam pertempuran.</li>
                  <li>ATK - Berapa banyak kerusakan yang diberikan Karakter.</li>
                  <li>DEF - Mengurangi kerusakan yang diterima Karakter.</li>
                  <li>Speed - Menentukan seberapa cepat dan seberapa sering Karakter akan beraksi dalam pertempuran.</li>
                  <li>Crit Rate - Seberapa besar kemungkinan Karakter mendaratkan serangan kritis.</li>
                  <li>Crit DMG - Menentukan pengganda kerusakan saat mendaratkan serangan kritis.</li>
                  <li>Break Effect - Meningkatkan efek Weakness Break (jumlah kerusakan yang diberikan), jumlah DMG yang diberikan oleh DoT per giliran dan juga seberapa jauh aksi musuh tertunda.</li>
                  <li>Outgoing Healing Boost - Menentukan jumlah penyembuhan yang dilakukan oleh kemampuan Penyembuhan Karakter.</li>
                  <li>Energy Regeneration Rate - Menentukan seberapa cepat Karakter mengisi ulang energi untuk kemampuan Ultimate mereka.</li>
                  <li>Effect Hit Rate - Menentukan seberapa besar kemungkinan Karakter memberikan debuff kepada musuh.</li>
                  <li>Effect RES - Menentukan seberapa sulit bagi musuh untuk memberikan debuff pada Karakter.</li>
                  <li>Elemental Damage Boost - Meningkatkan semua kerusakan yang diberikan karakter.</li>
              </ul>
              <p class="card-text" style="padding-left:30px; font-style:italic;">
                Note: bahwa ada tujuh elemen yang berbeda dalam permainan dan setiap elemen memiliki statistik Elemental Damage Boost yang terpisah.
              </p>
              <br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Kemampuan Karakter
              </p>
              <p class="card-text" style="padding-left:30px;">
                Setiap karakter di Honkai: Star Rail memiliki 5 kemampuan berbeda yang menentukan gaya bermain mereka.
              </p>
              <ul>
                <li>Serangan Dasar</li>
                Kemampuan Basic Attack adalah serangan otomatis karakter dan selalu tersedia untuk digunakan selama pertarungan. Meskipun secara umum kemampuan ini dianggap sebagai kemampuan pengisi yang digunakan untuk menghasilkan Poin Skill, ada beberapa karakter yang melakukan sebagian besar kerusakan melalui Basic Attack. <br><br>
                <li>Skill</li>
                Skill adalah kemampuan tempur yang dapat digunakan oleh Karakter dengan efek mulai dari memberikan damage hingga memberikan buff kepada anggota tim kamu. Kemampuan Skill tidak memiliki cooldown dan mengharuskan kamu mengeluarkan Skill Point untuk menggunakannya. <br><br>
                <li>Ultimate</li>
                Kemampuan Ultimate dari suatu karakter umumnya merupakan kemampuan tempur terkuatnya. Untuk menggunakan kemampuan Ultimate, pertama-tama harus diisi melalui aksi pertarungan tertentu seperti menyerang atau mengalahkan musuh. Itu juga harus diisi ulang setelah setiap penggunaan. <br><br>
                <li>Talent</li>
                Talent adalah kemampuan pasif Karakter. Umumnya, ini berbentuk efek bersyarat di mana Talent akan memberikan semacam keuntungan kepada Karakter dan/atau tim mereka ketika kondisi tertentu terpenuhi. <br><br>
                <li>Technique</li>
                Tidak seperti kemampuan Karakter lainnya, Technique adalah kemampuan di luar dunia dan bukan kemampuan tempur dan digunakan sebelum pertarungan dimulai. Bergantung pada Karakter, menggunakannya akan memulai pertempuran dengan serangan khusus atau akan memberikan buff sebelum menyerang musuh.
            </ul>
            <br>
            <p class="card-text">
              ▣ Characters Progression
            </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Meningkatkan Karakter Anda di Honkai: Star Rail akan meningkatkan kemampuan tempur mereka, memungkinkan Anda untuk menantang dan mengatasi konten yang lebih sulit yang ditawarkan game ini.
              <br> <br>
              Cara utama agar Karakter menjadi lebih kuat di Honkai: Star Rail adalah: <br>
              -	Meningkatkan level Karakter. <br>
              -	Meningkatkan Traces Karakter. <br>
              -	Membuka Eidolon Karakter. <br>
              -	Memasang Light Cone. <br>
              -	Memasang Relic dan Planar Ornament. <br> <br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Level karakter dan Ascension
              </p>
              <img src="{{asset('storage/guidehsrimage/level.png')}}" style="width: 35rem; padding-left: 30px;">
              <p class="card-text" style="padding-left:30px;">
                Setiap Karakter di Honkai: Star Rail memiliki Level Karakter mulai dari 1 hingga 80 dan mendapatkan statistik tambahan saat mereka naik level.
                Setelah Karakter mencapai pencapaian level tertentu, mereka harus naik level untuk meningkatkan level mereka lebih jauh. Karakter dimulai dengan Level maksimal dasar 20. Setiap kali Anda menaikkan level Karakter, batas level mereka akan bertambah 10 hingga maksimum 80. Untuk menaikkan Karakter, Anda harus mengumpulkan material dari Stagnant Shadow Boss dan musuh di dunia luar.
              <br> <br>
              Selain itu, perhatikan juga bahwa Level Trailblaze (Level Akun) Anda juga akan menentukan berapa kali Anda dapat menaiki Karakter. Meskipun Anda memiliki semua bahan kenaikan yang diperlukan, Anda tidak akan dapat menaiki Karakter melewati Level tertentu kecuali jika akun Anda juga memiliki Level Trailblaze yang sesuai.
              </p>
              <br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Traces
              </p>
              <img src="{{asset('storage/guidehsrimage/traces.png')}}" style="width: 35rem; padding-left: 30px;">
              <p class="card-text" style="padding-left:30px;">
                Traces adalah pohon peningkatan keterampilan yang dimiliki setiap Karakter. Membuka dan meningkatkan berbagai node di Trace Karakter akan memberi mereka bonus stat, kemampuan pasif ekstra, dan peningkatan pada 4 Skill mereka.
              <br> <br>
              Traces dapat ditingkatkan dengan menggunakan material yang ditemukan di Crimson Calyx, sebagai hadiah misi, atau dibeli di toko.
              </p>
              <br>
              <p class="card-text" style="padding-left:30px; font-weight:bold;">
                Eidolons
              </p>
              <img src="{{asset('storage/guidehsrimage/eidolons.png')}}" style="width: 35rem; padding-left: 30px;">
              <p class="card-text" style="padding-left:30px;">
                Eidolon meningkatkan kemampuan Karakter atau memberi mereka bonus pasif baru.
                Setiap Karakter memiliki 6 peningkatan Eidolon dengan setiap peningkatan Eidolon memberikan bonus yang berbeda.

              <br> <br>
              Upgrade Eidolon dapat dibuka dengan mendapatkan salinan duplikat Karakter dari Warps (sistem gacha) atau melalui misi dan event dalam game.Satu-satunya pengecualian untuk ini adalah Karakter Utama. Anda dapat memperoleh peningkatan Eidolon mereka melalui misi dalam game dan hadiah Trailblaze Level (Level Akun).
              </p>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
