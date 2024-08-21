@section('title', 'Honkai: Star Rail Paths - Honkai: Star Rail | HoshiLab')
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
                Honkai: Star Rail Paths
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail path.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Path
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Setiap Karakter di Honkai: Star Rail memiliki Path.
              <br><br>
              Anda dapat menganggap Path sebagai kelas karakter - Path karakter akan memberi Anda gambaran umum tentang peran apa yang dijalankan oleh Karakter tersebut dalam pertarungan serta Light Cone yang dapat digunakan sepenuhnya.
              <br> <br>
              Saat ini di dalam game tersedia 7 Path yang dapat dimainkan:
              <br> <br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Abundance.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Abundance (Healer)</span>
              </div>
              Path ini fokus pada pemulihan HP anggota tim dan menjaga mereka tetap hidup.
              <br><br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Destruction.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Destruction (DPS General)</span>
              </div>
              Path ini fokus pada memberikan damage - baik target tunggal maupun AOE.
              <br><br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Erudition.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Erudition (DPS Multi-Target)</span>
              </div>
              Path ini fokus pada memberikan kerusakan AOE, memungkinkan mereka untuk dengan cepat menangani seluruh gelombang musuh.
              <br><br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Harmony.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Harmony (Offensive / Utility Support)</span>
              </div>
              Path ini fokus untuk mendukung anggota tim mereka dengan berbagai buff ofensif.
              <br><br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Hunt.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Hunt (DPS Single Target)</span>
              </div>
              Path ini fokus pada memberikan damage pada satu target - kamu dapat menganggap mereka sebagai Assassin.
              <br><br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Nihility.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Nihility (Debuffer)</span>
              </div>
              Path ini fokus pada melemahkan musuh dengan debuff.
              <br><br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Preservation.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Preservation (Defensive Support/Tank)</span>
              </div>
              Path ini fokus pada mendukung anggota tim mereka (secara defensif - misalnya dengan memberikan shield ke mereka).
              <br>
              <br>
<br>
              Untuk mengetahui lebih detail mengenai penjelasan karakter dapat klik gambar dibawah ini:
              <div>
                <a href="{{ route('Characters Guide View') }}">
                    <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail character.jpg')}}" alt="Card image cap" style="width:10rem; margin-right:10px;">
                </a><span style="color:white;">Character Guide</span>
            </div>
            <br><br>
            Untuk mengetahui karakter apa saja dalam Honkai: Star Rail dapat klik gambar dibawah ini:
              <div>
                <a href="{{ route('Guest Character Honkai Star Rail Page') }}">
                    <img class="card-img-top" src="{{asset('storage/characterimagehsr/Jingliu.png')}}" alt="Card image cap" style="width:85px; height:85px; margin-right:10px;">
                </a><span style="color:white;">Character List </span>
            </div>



              </div>
      </div>
  </div>
  <br>
</div>
@endsection
