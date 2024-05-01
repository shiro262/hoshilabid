@section('title', $chara->name)
@extends('template.masterguesthsr')
@section('content')

<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/>
    <section class="vh-10">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card-transparent" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{asset('storage/characterimagehsr/'.$chara->image)}}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0" style="color:White;">{{$chara->name}}</span>
                    </div>
                    <hr>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">
                        <?php
                            $val = $chara->detail;
                            echo nl2br($val);
                        ?>
                    </h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Type: {{$chara->path}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Element: {{$chara->element}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Rarity: {{$chara->rarity}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Role: {{$chara->role}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Tier (Memory of Chaos): {{$chara->tier_moc}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Tier (Pure Fiction): {{$chara->tier_pf}}</h4>
                    <hr style="height:10px;border-width:10px;">
                    <h4 class="fw-bold mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Rekomendasi Build</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">
                        Weapon<br/>
                        <hr style="height:10px; border-width:10px; color:blue;">
                        Signature:<br/>
                        <img style="height:50px;border-width:50px;" src="{{asset('storage/lightconeimage/'.$chara->signlightcone->image)}}">  {{$chara->signlightcone->name}}
                        <br/>
                        Alternative:<br/>
                        <img style="height:50px;border-width:50px;" src="{{asset('storage/lightconeimage/'.$chara->alt1lightcone->image)}}">  {{$chara->alt1lightcone->name}}
                        <br/>
                        <img style="height:50px;border-width:50px;" src="{{asset('storage/lightconeimage/'.$chara->alt2lightcone->image)}}">  {{$chara->alt2lightcone->name}}
                    </h4>
                    <hr style="height:10px; border-width:10px;">
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;text-align:left; color:White;">
                        Artifact Set<br/>
                        <hr style="height:10px; border-width:10px; color:blue;">
                        Option 1:<br/>
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/relicimage/'.$chara->relicoption1->image)}}"> {{$chara->relicoption1->name}}
                        <br/>
                        Option 2:<br/>
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/relicimage/'.$chara->relicoption2->image)}}"> {{$chara->relicoption2->name}}
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
