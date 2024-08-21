@section('title', "Intro Spiral Abyss - Genshin Impact | HoshiLab")
@extends('template.mastermembergenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href={{ route('Member Genshin Guide Page') }} class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Intro Spiral Abyss
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/spiralabyssthumb.png')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Spiral Abyss<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Spiral Abyss merupakan sebuah Game Mode Challenge dalam Genshin Impact yang sistemnya seperti tower fight pada setiap game RPG pada umumnya. Domain Spiral Abyss bisa kamu temui disini.<br/>
                    <img src="{{asset('storage/guidegenshinimage/location.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Dalam Spiral Abyss player akan diberikan tantangan untuk mengalahkan musuh di setiap lantai dengan waktu tertentu (Time Challenge), dan akan mendapatkan reward jika dapat menyelesaikan di waktu tertentu.<br/>
                    Biasanya player akan diberi waktu total 10 menit untuk meneyelesaikan setiap lantai namun pemain akan mendapatkan satu bintang (total 3 bintang) setiap menyelesaikan tantangan di waktu tertentu.<br/>
                    <img src="{{asset('storage/guidegenshinimage/timech.png')}}" style="width: 25rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Ada juga tantangan semacam tower defense, dimana pemain harus mengalahkan semua musuh sambil melidungi sebuah tower.<br/>
                    <img src="{{asset('storage/guidegenshinimage/towerdef.png')}}" style="width: 25rem; margin-top:10px; margin-bottom:10px;"><br/>
                    <br/>
                    ▣ Abyssal Corridor<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/abyssalcorridor.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Adalah Lantai 1 - 8 dari Spiral Abyss<br/>
                    Abyssal Corridor merupakan content permanen yang dapat diselesaikan kapan saja namun hanya sekali saja untuk mendapatkan rewardnya setelah berhasil menyelsaikannya dengan full star.<br/>
                    Menyelesaikan setiap 3 bintang (dengan total 9 bintang) akan mendapatkan reward berupa Primogem dan Mora.<br/>
                    <img src="{{asset('storage/guidegenshinimage/rewardabysscorridor.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Abyssal Corridor relatif mudah dan pasti dapat diselesaikan oleh semua player, menyelesaikan Abyssal Corridor juga akan membuka mode Abyssal Moon Spire.<br/>
                    <br/>
                    ▣ Abyssal Moon Spire<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Merupakan content End Game yang diberikan oleh Genshin Impact kepada pemainnya, dimana ini merupakan lanjutan dari Abyssal Corridor, yaitu Lantai 9 - 12 dari Spiral Abyss.<br/>
                    <img src="{{asset('storage/guidegenshinimage/Abyssal_moon_spire.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Dalam setiap lantai dari mode ini terdapat 2 chamber, dimana pemain harus menyiapkan 2 party untuk bertarung di setiap lantainya.<br/>
                    <img src="{{asset('storage/guidegenshinimage/partysetupspabyss.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Tidak seperti Abyssal Corridor, mode ini bersifat limited, dimana pemain akan diberikan waktu ± 2 minggu untuk menyelesaikannya, baru lalu mode ini akan di reset dan player akan dapat mengulanginya lagi dari lantai 9 dengan musuh yang berbeda (tiap patch) dan blessing yang berbeda.<br/>
                    Dan biasanya musuh yang muncul di setiap patch nya akan berbeda, dengan ini player harus menyiapkan banyak option party dalam menaklukan mode ini di setiap patchnya.<br/>
                    Dalam mode ini juga memberikan sebuah blessing, sebuah buff tambahan yang akan membantu player, buff ini juga akan berubah tiap reset.<br/>
                    <img src="{{asset('storage/guidegenshinimage/blessing4.6.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
