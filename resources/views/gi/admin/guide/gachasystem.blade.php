@section('title', "Gacha System - Genshin Impact | HoshiLab")
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href={{ route('admin Genshin Guide Page') }} class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Gacha System
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/gachasystemthumb.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Wish<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Dalam game Genshin Impact, pemain akan disuguhkan dengan sistem gacha yang disebut dengan Wish dalam mendapatkan karakter dan senjata terutama untuk 5star unit. <br/>
                    Sistem Gacha ini dapat dilakukan dengan menggunakan Primogem, semacam credits atau point dalam Genshin Impact untuk melakukan Wish. Primogem bisa didapatkan secara gratis lewat berbagai quest dan melakukan eksplorasi map, dan juga pemain bisa melakukan metode berbayar dengan melakukan pembelian (top up) dengan uang asli. <br/>
                    Biaya Wish dalam Genshin Impact: <br/>
                    1x Pull: 160 Primogem <br/>
                    10x Pull: 1600 Primogem<br/>
                    (Dengan guarantee 1 4star atau lebih setiap 10x Pull itungan Wish)<br/><br/>
                    ▣ Sistem Pity dan Tipe Banner dalam Genshin Impact<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Seperti game gacha pada umumnya, Genshin Impact menghadirkan Pity System di setiap banner gachanya. Pity System dalam game gacha merupakan sistem yang memberikan kamu sesuatu yang pasti (dalam konteks ini 5star unit) setiap jumlah pull yang tertentu, dalam Genshin Impact sendiri memperlukan 90x pull total untuk meng-hit Pity banner Character dan 80x pull untuk banner senjata.<br/>
                    Terdapat 3 tipe banner wish dalam Genshin Impact, yaitu:<br/>
                    <br/>
                    <ol>
                        <li>
                            Character Event Wish<br/>
                            <img src="{{asset('storage/guidegenshinimage/chara event wish.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                            Banner event yang meng-rate up 1 character 5star dan 3 4star tertentu dan berdurasi terbatas (±20 hari). Di banner character ini terdapat system 50:50 atau biasa disebut rate off dan rate on, berikut penjelsannya:<br/>
                            50 50 System:<br/>
                            Setelah kamu dijelaskan apa itu pity system,  di Genshin Impact terdapat sistem rate 50:50 atau biasa disebut rate off dan rate on, dimana setiap kamu mendapatkan unit 5star, unit tersebut belum tentu unit yang di rate up di banner tersebut.<br/>
                            Contoh saja, kamu melakukan gacha pada posisi rate off dan mendapatkan 5star unit di pull kesekian di Banner Furina, unit 5star tersebut belum tentu Furina, melainkan ada chance 50% kalau unit tersebut merupakan 5star unit lain dari Standard Banner namun kalau yang keluar Furina, maka selamat kamu telah menang 50:50 chance/rate off!<br/>
                            Untuk penjelasan rate on, jika pada sebelumnya kamu kalah 50:50 chance, dimana kamu mendapatkan 5star unit selain rate up banner, maka kamu akan berada di posisi rate on/100% chance, dimana next 5star unit yang akan kamu dapatkan sudah dipastikan karakter yang di rate up banner tersebut. (Note: Rate on banner limited bisa disimpan, dalam artian tidak akan hilang walaupun sudah berganti banner sampai kamu menggunakan rate tersebut untuk mendapatkan 5star unit yang kamu mau)<br/>
                        </li>
                        <br/>
                        <li>
                            Weapon Event Wish<br/>
                            <img src="{{asset('storage/guidegenshinimage/weapon wish.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                            Banner senjata signature dari character yang sedang di rate up di Banner Character Event Wish dan berdurasi terbatas (±20 hari). Namun memiliki sistem yang agak berbeda dengan banner character. Kalau diatas kamu sudah dijelaskan mengenai sistem 50:50 chance, pada banner weapon kamu akan diberikan chance 75:25 namun terdapat 2 senjata yang di rate up, jadi saat posisi rate off terdapat chance 75% kamu akan mendapatkan salah satu dari 2 senjata tersebut.<br/>
                            Dan untuk banner senjata terdapat system bernama Fate Point<br/>
                            <img src="{{asset('storage/guidegenshinimage/fate point.png')}}" style="width: 35rem;"><br/>
                            Dimana setiap kamu mendapatkan 1 senjata 5star, kamu akan mendapatkan 1 fate point dan setelah kami mendapat 2 fate point maka kamu akan mendapatkan senjata pilihan kamu di next 5star yang kamu dapat, namun ingat fate point tidak bisa disimpan untuk next banner dan akan hilang setelah pergantian banner. Jadi bisa dibilang banner Weapon Event Wish ini cukup beresiko dan mahal, dibutuhkan total 240x pull untuk 100% guarantee mendapatkan senjata yang kamu inginkan.<br/>
                        </li>
                        <br/>
                        <li>
                            Standard Wish<br/>
                            <img src="{{asset('storage/guidegenshinimage/standard wish.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                            Merupakan banner permanen yang tidak memiliki batas waktu, berisikan berbagai 5star dan 4star character+weapon. Banner ini memiliki sistem yang sama dengan Character Event Wish yaitu 50:50 System.
                        </li>
                    </ol>
                </p>
                <br/>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
