@section('title', "Tips Early Game - Genshin Impact | HoshiLab")
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
                Tips Early Game
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/Guide_genshin.png')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Pada awal permainan, pemain akan disajikan dengan prolog dan juga berbagai tutorial seperti mekanik combar, elemental reaction, sampai terbang menggunakan sayap ketika sedang di udara atau ketinggian. Pemain juga akan membuka sistem Wish, sebutan gacha di Genshin Impact untuk mendapatkan karakter dan senjata.<br/>
                    <br/>
                    ▣ Setelah melakukan tutorial, apa yang harus dilakukan?<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <ul>
                        <li>
                            Quest<br/>
                            Menyelesaikan quest adalah hal yang paling penting kamu selesaikan saat memulai game ini. Pemain akan diberikan berbagai macam quest, mulai dari: <br/>
                            <ol>
                                <li>
                                    Archon Quest, yang merupakan inti cerita dari game, pemain akan diajak untuk melakukan explorasi ke setiap negara di Teyvat untuk bertemu dengan The Seven sambil mencari keberadaan saudara kembarnya yang hilang, disini pemain akan disajikan dengan cerita yang sangat seru.<br/>
                                    <img src="{{asset('storage/guidegenshinimage/archon quest.jpg')}}" style="width: 35rem; margin-top:10px;"><br/>
                                </li>
                                <br/>
                                <li>
                                    Story Quest dari masing-masing karakter, (Story Mission biasanya hanya tersedia untuk karakter 5star), dimana akan menceritakan lore atau latar belakang dari karakter atau kendala/masalah yang sedang dialami karakter dalam cerita. Terkadang Story Quest akan membuka quest atau bahkan domain baru untuk dimainkan.<br/>
                                    <img src="{{asset('storage/guidegenshinimage/storyquest.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                                </li>
                                <br/>
                                <li>
                                    World quest, setiap negara di Teyvat akan memiliki World Quest dimana pemain harus menghampiri dan mengambil quest tersebut lewat NPC, quest ini umumnya membawa suatu yang penting untuk eksplorasi map, karena biasanya quest tersebut akan membuka suatu tempat khusus atau fitur khusus di negara itu setelah quest diselesaikan.<br/>
                                    <img src="{{asset('storage/guidegenshinimage/quest.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                                </li>
                                <br/>
                                <li>
                                    Daily commission, merupakan quest harian, dimana akan reset setiap harinya. Quest ini bertotal 4 setiap harinya, dimana akan memberikan reward total 60 Primogem setiap harinya setelah diselesaikan.<br/>
                                    <img src="{{asset('storage/guidegenshinimage/dailycom.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                                </li>
                                <br/>
                                <li>
                                    Event Quest, quest terbatas yang biasanya hanya tersedia di periode waktu tertentu, biasanya tersedia hingga waktu versi patch tersebut habis ( ± 40 Hari). Event Quest biasanya akan memberikan kamu banyak reward, mulai dari Primogem, Material, Mora, sampai Weapon Limited yang hanya bisa didapatkan dengan menyelesaikan keseluruhan quest.<br/>
                                    <img src="{{asset('storage/guidegenshinimage/eventquest.jpg')}}" style="width: 35rem; margin-top:10px;"><br/>
                                </li>
                            </ol>
                            <br/>
                            Quest-quest diatas akan memberikan reward yang sangat mengguntungkan bagi pemula, mulai dari Primogem, Material Exp, Exp Adventure, Mora, sampai terbukanya negara/tempat baru di map untuk di eksplor. Dan juga untuk Quest Event Limited, pastikan kamu menyelesaikannya terlebih dahulu, karena quest tersebut terbatas dan biasanya memberikan reward yang spesial.<br/>
                        </li>
                        <br/>
                        <li>
                            Eksplorasi Map<br/>
                            <img src="{{asset('storage/guidegenshinimage/map.png')}}" style="width: 35rem; margin-top:10px;"><br/>
                            <p style="margin-top:10px;">
                                Di Genshin Impact memiliki map yang sangat besar (dan akan terus di update untuk versi patch kedepan) yang bisa di jelajahi oleh pemain.<br/>
                                <img src="{{asset('storage/guidegenshinimage/chest.jpg')}}" style="width: 10rem; margin-top:10px;"><br/>
                                Terdapat banyak chest/peti harta karun yang bisa kamu temukan saat menjelajahi Teyvat, jadi jangan lupa membukanya ya! Karena chest tersebut akan memberikan kamu Primogem dan juga berbagai material exp yang sangat berguna.<br/>
                                <img src="{{asset('storage/guidegenshinimage/challenge.png')}}" style="width: 10rem; margin-top:10px;"><br/>
                                Terdapat juga “Mini Challenge” yang bisa kamu temukan saat menjelahi Teyvat, mulai dari Shooting, Time, dan juga Combat. Reward dari challenge ini adalah chest yang akan memberi kamu reward Primogem dan material.<br/>
                                <img src="{{asset('storage/guidegenshinimage/teleportwaypoint.jpg')}}" style="width: 10rem; margin-top:10px;"><br/>
                                Teleport Waypoint merupakan device di Genshin Impact yang bertebaran di seluruh map Teyvat, yang berguna untuk Pemain melakukan teleportasi ke titik/tempat tertentu di Teyvat. Teleport Waypoint harus terlebih dahulu di samperin dan di aktifkan terlebih dahulu sebelum dapat digunakan dengan bebas, jadi pastikan kamu mengaktifkan seluruh teleport waypoint yang kamu temui saat melakukan eksplorasi karena akan memudahkan kamu ke depannya untuk berpergian ke tempat tertentu dan setiap teleport waypoint yang kamu aktifkan akan memberi kamu 5 Primogem!<br/>
                                <img src="{{asset('storage/guidegenshinimage/Statue_of_The_Seven_Mondstadt.png')}}" style="width: 10rem; margin-top:10px;"><br/>
                                Selain Teleport Waypoint ada juga Statue of the Seven, yang akan membuka bagian map di sekitarnya setiap diaktifkan dan juga dapat menjadi alat teleportasi. Selain menjadi alat untuk melakukan Teleport, statue of the seven akan memberikan kamu berbagai reward setiap kamu menaikan levelnya, dan untuk Statue Archon Anemo dan Geo akan menaikkan max Stamina kamu, jadi pastikan untuk terlebih dahulu mengumpulkan Anemoculus dan Geoculus untuk menaikkan level statue.
                            </p>
                        </li>
                    </ul>
                    ▣ Adventure Rank<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/advrank.png')}}" style="width: 35rem;"><br/>
                    <p style="margin-top:10px;">
                        Adventure Rank (AR) adalah sistem perkembangan akun pemain di Genshin Impact yang dinaikkan melalui Adventure EXP.<br/>
                        Setelah mencapai Adventure Rank tertentu, pemain akan dapat naik ke World Level berikutnya, baik secara otomatis maupun dengan menyelesaikan Quest Ascension. Ketika World Level pemain meningkat, maka tingkat kesulitan dan reward dari Monster, Bos, dan Ley Line Outcrops akan meningkat.<br/>
                        Pemain dapat meningkatkan Adventure Rank mereka menjadi 60 dan World Level menjadi 8. Setelah Adventure Rank 60 tercapai, setiap poin tambahan Adventure EXP yang diperoleh akan dikonversi menjadi Mora dengan rasio 1:10.<br/>
                    </p>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
