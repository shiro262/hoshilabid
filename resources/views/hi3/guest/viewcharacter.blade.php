@section('title', $chara->name)
@extends('template.masterguest')
@section('content')

<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/>
    <section class="vh-10">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card-transparent" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{asset('storage/chara/'.$chara->image)}}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0" style="color:White;">{{$chara->name}}</span>
                    </div>
                    <hr>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">{{$chara->detail}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Type: {{$chara->type}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Element: {{$chara->element}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Rarity: {{$chara->rarity}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Role: {{$chara->role}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Tier (by HoshiLab): {{$chara->tier}}</h4>
                    <hr style="height:10px;border-width:10px;">
                    <h4 class="fw-bold mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Rekomendasi Build</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">
                        Weapon<br/>
                        <hr style="height:10px; border-width:10px; color:blue;">
                        Signature:<br/>
                        <img style="height:50px;border-width:50px;" src="{{asset('storage/weaponimagehonkai/'.$chara->bestweapon->image)}}">  {{$chara->bestweapon->name}}
                        <br/>
                        Alternative:
                    </h4>
                    <hr style="height:10px; border-width:10px;">
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;text-align:left; color:White;">
                        Stigmata Set<br/>
                        <hr style="height:10px; border-width:10px; color:blue;">
                        Signature:<br/>
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/stigmataimage/'.$chara->beststigmata->Image)}}"> {{$chara->beststigmata->name}}
                        <br/>
                        Alternative:
                    </h4>
                    <br/><a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: left;"><</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
</div>
@endsection
