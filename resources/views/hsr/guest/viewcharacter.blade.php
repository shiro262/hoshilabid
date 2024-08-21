@section('title', $chara->name.' - Honkai: Star Rail | HoshiLab')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
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
            <img src="{{asset('storage/characterimagehsr/'.$chara->image)}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Guide<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                        <?php
                            $val = $chara->detail;
                            echo nl2br($val);
                        ?>
                    <br/>
                    Path: {{$chara->path}}<br/>
                    Element: {{$chara->element}}<br/>
                    Rarity: {{$chara->rarity}}<br/>
                    Role: {{$chara->role}}<br/>
                    Tier (Memory of Chaos): {{$chara->tier_moc}}<br/>
                    Tier (Pure Fiction): {{$chara->tier_pf}}
                    <br/><br/>
                    ▣ Rekomendasi Build<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Lightcone
                    <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                    Opsi Terbaik:<br/>
                    <a href="{{ route('View Lightcone Guest', [$chara->signlightcone->id]) }}">
                        <img style="height:75px;border-width:75px; margin-top:10px;" src="{{asset('storage/lightconeimage/'.$chara->signlightcone->image)}}"></a>  {{$chara->signlightcone->name}}
                    <br/><br/>
                    Opsi Alternatif:<br/>
                    <a href="{{ route('View Lightcone Guest', [$chara->alt1lightcone->id]) }}">
                        <img style="height:75px;border-width:75px; margin-top:10px;" src="{{asset('storage/lightconeimage/'.$chara->alt1lightcone->image)}}"></a>  {{$chara->alt1lightcone->name}}
                    <br/><br/>
                    <a href="{{ route('View Lightcone Guest', [$chara->alt2lightcone->id]) }}">
                    <img style="height:75px;border-width:75px;" src="{{asset('storage/lightconeimage/'.$chara->alt2lightcone->image)}}"></a>  {{$chara->alt2lightcone->name}}
                    <br/><br/>
                        Relic Set<br/>
                        <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                        Opsi 1:<br/>
                        <a href="{{ route('View Relic Guest', [$chara->relicoption1->id]) }}">
                            <img style="height:75px;border-width:75px;" src="{{asset('storage/relicimage/'.$chara->relicoption1->image)}}"></a> {{$chara->relicoption1->name}}
                        <br/>
                        Opsi 2:<br/>
                        <a href="{{ route('View Relic Guest', [$chara->relicoption2->id]) }}">
                            <img style="height:75px;border-width:75px;" src="{{asset('storage/relicimage/'.$chara->relicoption2->image)}}"></a> {{$chara->relicoption2->name}}
                    <br/><br/>
                        Planar Ornament Set<br/>
                        <hr style="height:10px; border-width:1px; color:white; margin-top:3px; margin-bottom:0px;">
                        Opsi 1:<br/>
                        <a href="{{ route('View Planar Guest', [$chara->planaroption1->id]) }}">
                            <img style="height:75px;border-width:75px;" src="{{asset('storage/planarimage/'.$chara->planaroption1->image)}}"></a> {{$chara->planaroption1->name}}
                        <br/>
                        Opsi 2:<br/>
                        <a href="{{ route('View Planar Guest', [$chara->planaroption2->id]) }}">
                            <img style="height:75px;border-width:75px;" src="{{asset('storage/planarimage/'.$chara->planaroption2->image)}}"></a> {{$chara->planaroption2->name}}
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
