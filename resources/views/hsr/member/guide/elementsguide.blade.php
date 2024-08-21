@section('title', 'Honkai: Star Rail Elements - Honkai: Star Rail | HoshiLab')
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
                Honkai: Star Rail Elements
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/guidehsrimage/thumbnail element.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
              <p class="card-text">
              ▣ Element
              </p>
              <hr style="height:10px; border-width:5px; color:white;">
              Dalam setiap karakter di game Honkai: Star Rail mempunyai satu elemen yang pasti dalam diri karakter. Elemen karakter tergantung dari Damage Type dari serangan mereka.
              <br><br>
              Hingga saat ini terdapat 7 elemen yang terdapat dalam game yaitu:
              <br> <br>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Physical.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Physical</span>
              </div>
              Debuff yang diberikan: Bleed
              <br>
              Debuff DMG: High
              <br>
              <ul>
                <li>Memberikan damage over time (Berdasarkan dari Max HP musuh). Berlangsung selama 2 putaran.</li>
              </ul>
              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Fire.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Fire</span>
              </div>
              Debuff yang diberikan: Burn
              <br>
              Debuff DMG: High
              <br>
              <ul>
                <li>Memberikan damage over time dan berlangsung selama 2 putaran.</li>
              </ul>

              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Ice.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Ice</span>
              </div>
              Debuff yang diberikan: Freeze
              <br>
              Debuff DMG: Average
              <br>
              <ul>
                <li>Memberikan damage dan freeze ke musuh selama 1 putaran. Setelah musuh telah selesai masa freeze nya, musuh melewatkan putaran, namun action nya maju instan sebesar 50%.</li>
              </ul>

              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Lightning.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Lightning</span>
              </div>
              Debuff yang diberikan: Shock
              <br>
              Debuff DMG: Average
              <br>
              <ul>
                <li>Memberikan damage over time dan berlangsung selama 2 putaran.</li>
              </ul>

              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Wind.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Wind</span>
              </div>
              Debuff yang diberikan: Wind Shear
              <br>
              Debuff DMG: High
              <br>
              <ul>
                <li>Memberikan damage overtime selama 2 putaran (dapat di stack hingga 5 kali).</li>
              </ul>

              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Quantum.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Quantum</span>
              </div>
              Debuff yang diberikan: Entanglement
              <br>
              Debuff DMG: Low
              <br>
              <ul>
                <li>Memberikan damage (berdasarkan Toughness maksimal musuh) dan menunda action musuh berdasarkan stat Break Effect. Menerapkan 1 stack setiap kali musuh terkena serangan (hingga 5 stack).</li>
              </ul>

              <div>
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/Imaginary.png')}}" alt="Card image cap" style="width:35px; height:35px; margin-right:10px;">
                <span style="color:white;">Imaginary</span>
              </div>
              Debuff yang diberikan: Imprisonment
              <br>
              Debuff DMG: None
              <br>
              <ul>
                <li>Menunda action musuh berdasarkan stat Break Effect dan mengurangi Speed mereka sebesar 10% selama 1 putaran.</li>
              </ul>

              <p class="card-text">
                ▣ Elements & Combat
                </p>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehsrimage/element content.png')}}" style="width: 35rem;">
                <br><br>
                Musuh memiliki serangkaian kelemahan elemen (umumnya 3) yang ditampilkan di atas kepala mereka. Tidak seperti game RPG tradisional, musuh tidak menerima kerusakan tambahan saat terkena serangan elemen yang lemah. Sebaliknya, hal itu justru akan mengurangi Ketangguhan musuh. Anda dapat memberikan Weakness Break pada musuh dengan mengurangi Toughness-nya menjadi 0. Musuh yang telah terkena Weakness Broken akan menerima kerusakan tambahan dan debuff berdasarkan elemen serangan yang mengurangi Toughness-nya menjadi 0.

              </div>
      </div>
  </div>
  <br>
</div>
@endsection
