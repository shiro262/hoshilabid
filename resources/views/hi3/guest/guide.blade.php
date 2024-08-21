@section('title', 'Guide - Honkai Impact 3rd | HoshiLab')
@extends('template.masterguest')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
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
            <a href="{{ route('Begginner Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/beginner.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Beginner Guide</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        General Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Combat Guide Honkai Impact View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/combat_thumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Combat Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Crystals Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/crystalthumbnail.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Crystals Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Foundry Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/foundy_thumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Foundry Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Energy Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/staminathumbnail.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Energy Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Shops Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/shop_thumb.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Shops Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Teams Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/team_thumb.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Teams Guide</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        Gacha Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Gacha Guide Honkai Impact View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/gachathumbnail.jpg')}}" alt="Card image cap">
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
            <a href="{{ route('Elysian Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/elysian_realm_thum.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Elysian Realm Guide</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Realms Guide View') }}">
                <img class="card-img-top" src="{{asset('storage/guidehonkaiimage/realmofbattlethumbnail.jpeg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title" style="color:White;">Realms of Battle Guide</h5>
            </div>
        </div>
    </div>
</div>
@endsection
