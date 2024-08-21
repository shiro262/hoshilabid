@section('title', $chara->name. ' - Genshin Impact | HoshiLab')
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                {{$chara->name}}
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Guide & Build
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/characterimagegenshin/'.$chara->image)}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Guide<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                        <?php
                            $val = $chara->detail;
                            echo nl2br($val);
                        ?>
                    <br/>
                    Type: {{$chara->type}}<br/>
                    Element: {{$chara->element}}<br/>
                    Rarity: {{$chara->rarity}}<br/>
                    Role: {{$chara->role}}<br/>
                    Tier (by HoshiLab): {{$chara->tier}}<br/>
                    <br/>
                    ▣ Rekomendasi Build<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Weapon
                    <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                        Opsi Terbaik:<br/>
                        <a href="{{ route('View Weapon Genshin admin', [$chara->signweapon->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/weaponimagegenshin/'.$chara->signweapon->image)}}"></a>  {{$chara->signweapon->name}}
                        <br/>
                        Alternatif:<br/>
                        <a href="{{ route('View Weapon Genshin admin', [$chara->alt1weapon->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/weaponimagegenshin/'.$chara->alt1weapon->image)}}"></a>  {{$chara->alt1weapon->name}}
                        <br/>
                        <a href="{{ route('View Weapon Genshin admin', [$chara->alt2weapon->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/weaponimagegenshin/'.$chara->alt2weapon->image)}}"></a>  {{$chara->alt2weapon->name}}
                        <br/><br/>
                        Artifact Set<br/>
                        <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                        Opsi 1:<br/>
                        <a href="{{ route('View Artifact admin', [$chara->artifactoption1->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/artifactimage/'.$chara->artifactoption1->image)}}"></a> {{$chara->artifactoption1->name}}
                        <br/>
                        Opsi 2:<br/>
                        <a href="{{ route('View Artifact admin', [$chara->artifactoption2->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/artifactimage/'.$chara->artifactoption2->image)}}"></a> {{$chara->artifactoption2->name}}
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
