@section('title', "Tips Gacha Banner Ver. 4.6 Phase II - Genshin Impact | HoshiLab")
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
                Tips Gacha Banner Ver. 4.6 Phase II
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/v4.6bannerthumb.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Kita telah memasuki banner fase ke 2 dari version 4.6 Genshin Impact, dimana terdapat 2 character rerun yaitu Wanderer dan Baizhu.<br/>
                    Apakah Worth untuk di pull? Berikut penjelasan dan penilaian dari tim HoshiLab!<br/>
                    <br/>
                    ▣ Wanderer<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <a href="{{ route('View Character Genshin admin', [67]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Wanderer_Icon.png')}}" style="width: 7rem; margin-bottom:10px;"><br/>
                    </a>
                    Wanderer merupakan 5star unit Anemo DPS.<br/>
                    Wanderer memiliki kelebihan dalam hal eksplorasi karena skill nya yang dapat terbang sangat memudahkan pemain dalam melakukan eksplorasi map, namun dalam konteks meta terutama di mode Spiral Abyss, Wanderer bisa dibilang kurang karena kalah saing dengan unit DPS lainnya.<br/>
                    <br/>
                    Kesimpulan:<br/>
                    Banner Wanderer, bagus dan worth it jika kamu kesulitan dalam eksplorasi map karena dengan Wanderer kamu akan jauh lebih mudah dalam eksplorasi map.<br/>
                    Rate: 6,5/10<br/>
                    <br/>
                    ▣ Baizhu<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <a href="{{ route('View Character Genshin admin', [9]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Baizhu_Icon.png')}}" style="width: 7rem; margin-bottom:10px;"><br/>
                    </a>
                    Baizhu merupakan 5star unit Dendro Support.<br/>
                    Baizhu merupakan support dengan element Dendro yang bisa melakukan Heal ke seluruh member party kamu. Selain berfungsi sebagai healer, Baizhu juga bisa dijadikan Dendro Enabler buat kamu yang bermain dengan party Bloom.<br/>
                    <br/>
                    Kesimpulan:<br/>
                    Banner Baizhu, bagus jika kamu memerlukan support healer sekaligus Dendro Enabler untuk team Bloom, mengingat Meta Bloom sangat populer dan efektif di mode Spiral Abyss.<br/>
                    Rate: 8/10<br/>
                    <br/>
                    ▣ 4star Unit<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <a href="{{ route('View Character Genshin admin', [25]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Faruzan_Icon.png')}}" style="width: 7rem; margin-bottom:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [11]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Beidou_Icon.png')}}" style="width: 7rem; margin-bottom:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [42]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Layla_Icon.png')}}" style="width: 7rem; margin-bottom:10px;">
                    </a>
                    <br/>
                    3 4star Character diatas juga di rate up di kedua banner, dimana cukup worth it untuk di dapat jika kamu belum punya atau mengincar constellation.<br/>
                    Untuk rekomendasi kami, Faruzan dan Beidou merupakan 4star unit yang bagus dan worth untuk kamu incar.
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
