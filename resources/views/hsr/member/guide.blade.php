@section('title', 'Guide - Honkai: Star Rail | HoshiLab')
@extends('template.mastermemberhsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Guides
    </h1>
    <br/>
    <h2 style="color:white;text-align:left;">
        Beginner Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Characters Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail character.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Character Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Elements Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail element.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Element Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Path Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail path.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Path Guide</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        General Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Combat Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail combat.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Combat Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Lightcone Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail lightcone.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Lightcone Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Relic Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail relicplanar.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Relic & Planar Guide</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        Gacha Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Gacha Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail gacha.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Gacha Guide</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        Game Mode
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Simulated Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail simulated.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Simulated Universe Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Swarm Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail swarm.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Swarm Disaster Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Forgotten Hall Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail moc.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Forgotten Hall Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Member Pure Fiction Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehsrimage/thumbnail pure.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Pure Fiction Guide</h5>
            </div>
        </div>
    </div>
</div>
@endsection
