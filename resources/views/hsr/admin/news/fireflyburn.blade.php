@section('title', 'Mendekati Star Rail — "Firefly: Operasi Pencegahan Kebakaran Laut" | Honkai: Star Rail | HoshiLab')
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
            Mendekati Star Rail — "Firefly: Operasi Pencegahan Kebakaran Laut" | Honkai: Star Rail
          </h1>
          <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
              12/06/2024
          </h6>
          <hr style="height:10px; border-width:5px; color:white;">
          <img src="{{asset('storage/hsrnewsimage/fireflyburn.jpg')}}" style="width: 35rem;">
          <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Orang paling berbahaya di antara Stellaron Hunter ternyata adalah %&*#%#Halo, aku Silver Wolf. Edisi kali ini lumayan juga, dan patut dipuji. Semoga acara kalian bisa terus mempertahankan kualitas seperti ini ya, dan jangan sembarangan bicara yang jelek-jelek tentang Stellaron Hunter~ Sampai jumpa, Tuan Burung. &*$^#!#@Tamu terhormat — Tuan Yang, telah bergabung bersama kita untuk mengenal lebih dalam kehidupan eksplosif seorang Stellaron Hunter "Sam"! <br> <br>

                    Saksikan program khusus Interastral Peace Entertainment "Mendekati Star Rail" — "Firefly: Operasi Pencegahan Kebakaran Laut". <br> <br>

                    *Terdapat kesalahan efek Pengurangan Toughness sebagian kemampuan pada video saat ini. Harap Trailblazer merujuk pada efek yang sebenarnya di dalam game. Kami memohon maaf telah menyebabkan kebingungan bagi Trailblazer. <br><br>
                </p>
                <br>
                <iframe width="680" height="400" src="https://www.youtube.com/embed/1Jct7Gt_-MA"></iframe>
            </div>
      </div>
  </div>
  <br>
</div>
@endsection
