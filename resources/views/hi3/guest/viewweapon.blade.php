@section('title', $weapon->name. ' - Honkai Impact 3rd | HoshiLab')
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
                {{$weapon->name}}
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                {{$weapon->rarity}}'s {{$weapon->type}}
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/weaponimagehonkai/'.$weapon->image)}}" style="width: 20rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Stats<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                        <?php
                            $val = $weapon->stats;
                            echo nl2br($val);
                        ?>
                    <br/><br/>
                    ▣ Skill Effect<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                        <?php
                            $val = $weapon->detail;
                            echo nl2br($val);
                        ?>
                    <br/><br/>
                    ▣ Drop<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    {{$weapon->source}}
                    <br/>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
