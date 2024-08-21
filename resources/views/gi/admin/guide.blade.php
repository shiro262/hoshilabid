@section('title', 'Guide - Genshin Impact | HoshiLab')
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
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
            <a href="{{ route('Genshin admin Guide Intro to Game Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/introtogame.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Intro ke dalam permainan</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 32rem;">
            <a href="{{ route('Genshin admin Guide Early Game Tips Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/Guide_genshin.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Tips Early Game</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        General Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide Elemental Reaction Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/elementalreactionthumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Elemental Reaction</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide Team Building Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/teambuildingthumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Team Building</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide Character Upgrade Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/charaprogressthumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Character Progression/Upgrade Tips</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        Gacha Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide Gacha System Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/gachasystemthumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Gacha System</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide F2P Gacha Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/f2pgachathumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Tips Gacha F2P</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide Should u Pull Current Banner Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/v4.6bannerthumb.jpg')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Tips Gacha Banner Ver. 4.6 Phase II</h5>
            </div>
        </div>
    </div>
    <h2 style="color:white;text-align:left;">
        Game Mode
    </h2>
    <hr style="height:10px; border-width:10px; color:white;">
    <div class="row row-cols-3">
        <div class="card-transparent" style="width: 30rem;">
            <a href="{{ route('Genshin admin Guide Intro to Spiral Abyss Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/spiralabyssthumb.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Intro Spiral Abyss</h5>
            </div>
        </div>
        <div class="card-transparent" style="width: 27rem;">
            <a href="{{ route('Genshin admin Guide Current Spiral Abyss Tips Page') }}">
                <img class="card-img-top" src="{{asset('storage/guidegenshinimage/4.6spiralabyssthumb.png')}}" alt="Card image cap">
            </a>
            <div class="card-body">
            <h5 class="card-title" style="color:White;">Ver. 4.6 Spiral Abyss Guide</h5>
            </div>
        </div>
    </div>
@endsection
