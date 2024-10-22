@section('title', $chara->name. ' - Honkai Impact 3rd | HoshiLab')
@extends('template.masterguest')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
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
            <img src="{{asset('storage/chara/'.$chara->image)}}" style="width: 35rem;">
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
                    Tier (by HoshiLab): {{$chara->tier}}
                    <br/><br/>
                    ▣ Rekomendasi Build<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Weapon
                    <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                    Opsi Terbaik:<br/>
                    <a href="{{ route('View Weapon Guest', [$chara->signweapon->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/weaponimagehonkai/'.$chara->signweapon->image)}}"></a>  {{$chara->signweapon->name}}
                    <br/><br/>
                    Opsi Alternatif:<br/>
                    <a href="{{ route('View Weapon Guest', [$chara->alt1weapon->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/weaponimagehonkai/'.$chara->alt1weapon->image)}}"></a>  {{$chara->alt1weapon->name}}
                    <br/>
                    <a href="{{ route('View Weapon Guest', [$chara->alt2weapon->id]) }}">
                        <img style="height:75px;border-width:75px;" src="{{asset('storage/weaponimagehonkai/'.$chara->alt2weapon->image)}}"></a>  {{$chara->alt2weapon->name}}
                    <br/><br/>
                        Stigmata Set<br/>
                        <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                        Opsi 1:<br/>
                        <a href="{{ route('View Stigmata Guest', [$chara->signstigmata->id]) }}">
                            <img style="height:75px;border-width:75px;" src="{{asset('storage/stigmataimage/'.$chara->signstigmata->image)}}"></a> {{$chara->signstigmata->name}}
                        <br/>
                        Opsi 2:<br/>
                        <a href="{{ route('View Stigmata Guest', [$chara->altstigmata->id]) }}">
                            <img style="height:75px;border-width:75px;" src="{{asset('storage/stigmataimage/'.$chara->altstigmata->image)}}"></a> {{$chara->altstigmata->name}}
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
