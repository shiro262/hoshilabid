@section('title', $planar->name.' - Honkai: Star Rail | HoshiLab')
@extends('template.masterMemberhsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                {{$planar->name}}
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Planar Ornament set
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/planarimage/'.$planar->image)}}" style="">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Set Bonus<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                        <?php
                            $val = $planar->detail;
                            echo nl2br($val);
                        ?>
                    <br/><br/>
                    ▣ Drop<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                        <?php
                            $val = $planar->source;
                            echo nl2br($val);
                        ?>
                    <br/>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
