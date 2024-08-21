@section('title', "Shops Guide - Honkai Impact 3rd | HoshiLab")
    @extends('template.masteradmin')
    @section('content')
    <div class="card text-center" style="background:black;">
        <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
        <div class="card-img-overlay">
        <br/><br/><br/><br/>
        <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
        <div class="col d-flex justify-content-center">
            <div class="card-transparent w-50 p-3" style="border:1px solid white;">
                <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                    Shops
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/shop_thumb.png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold; ">▣ Shops</p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Shops menyediakan material yang Anda butuhkan dengan berbagai macan Currency yang ada.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/asterite_shop.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Jika Anda adalah pemula, yang perlu Anda lakukan adalah berkunjung ke Asterite Shop karena disana menjual fragment Valkyrie yang bisa membantu Anda untuk Growth. Valkyrie yang di rekomendasikan unutk di beli adalah Valkyrie Boltstorm, Valkyrie Blasmetal, Revirst Calico, Sugary StarBurst, dan Haxxor Bunny. Mereka merupakan support yang akan memberikan boost elemental DMG pada DPS Anda. Untuk currency-nya, Anda bisa mendapatkan Asterite dengan memaikan Event yang tersedia.
                        Jika Anda sudah cukup lama bermain, Anda bisa mencoba di Exchange Shop, Dorm Shop, War Treasury, Mirage Shop, Elysian Shop.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/exchange_shop.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Exchange Shop mejual weapon dan stigma, tetapi currency untuk Shop ini tidak mudah untuk mendapatkannya. Weapon resonance bisa di dapatkan dengan cara converting weapon bintang 4 ke atas, pastikan untuk converting weapon yang tidak terpakai atau duplikasi. Sedangankan untuk Stigma Resonance bisa di dapatkan salvaging Stigma bintang 4 keatas dan open world, hal ini juga sama, pastikan salvaging pada stigma yang tidak terpakai dan duplikasi.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/dorm_shop.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Dorm Shop, Anda bisa membeli Dorm supply card, dan asterite. Unutk currency anda bisa mendapatkan dari errand di Dorm.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/war_treasure.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        War Treasury, Shop ini menjual Valkyrie S rank, tetapi Anda harus bijak saat memebeli valkyrie tersebut karena Currency pada shop tersebut cukup sulit di dapatkan. Cara mendapatkan currency tersebut bisa melalui Event Shop dan Memorial Arena.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/mirage_store.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Mirage shop, Shop ini menjual bahan material untuk membaut stigmata di Foundry. Unutk currency bisa didapatkan di Universal Mirage.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/elysian_shop.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Elysian Shop, Shop ini menjual Valkyrie Stamp, dimana Stamp ini bisa di konversi ke 10 fragment.
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
