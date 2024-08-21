@section('title', 'Pesan dari Admin! - Honkai: Star Rail | HoshiLab')
@extends('template.masteradminhsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ route('admin HSR Forum Page') }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Hai! Admin Hoshi disini!
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                oleh admin
            </h6>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Tanggal Post: 2024-05-28 01:53:24
            </h6>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Terakhir Update: 2024-05-28 01:53:24
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/posthsrimage/admin.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Hai! Admin Hoshi disini!<br/>
                    Selamat datang di forum komunitas HoshiLab untuk game Honkai: Star Rail<br/>
                    Disini kalian boleh melakukan posting apapun terkait Honkai: Star Rail atau juga boleh meninggal pesan & kesan untuk HoshiLab ya!<br/>
                    Tapi harap pakai kata-kata yang sopan ya!<br/>
                    Terima kasih sudah mampir!
                </p>
                <br/>
            </div>
        </div>
    </div>
    <br/><br/>
</div>
@endsection
