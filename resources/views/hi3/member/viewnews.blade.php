@section('title', $newss->title)
@extends('template.mastermember')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <img src="{{asset('storage/newsimage/'.$newss->banner)}}" style="width: 35rem;">
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        {{$newss->title}}
    </h1>
    <p class="card-text" style="color:White;">{{ $newss->created_at }}</p>
    <img src="{{asset('storage/newsimage/'.$newss->image)}}" style="width: 35rem;">
    <br/><br/>
    <h5 class="card-text" style="color:White; text-align:left;">
        <?php
        $val = $newss->detail;
        echo nl2br($val);
        ?>
    </h5>
    <br/>
</div>
@endsection
