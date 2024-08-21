@section('title', "Pengumuman Penyesuaian Persyaratan Minimum Perangkat - Genshin Impact | HoshiLab")
@extends('template.masterguestgenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Pengumuman Penyesuaian Persyaratan Minimum Perangkat
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 09/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/9/thumbnail.png')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Dear Traveler,<br/>
                    Di Genshin Impact Versi 5.0 mendatang, tim pengembang akan meningkatkan tampilan gambar dan fitur game secara keseluruhan.<br/>
                    Peningkatan ini juga berarti membutuhkan persyaratan kinerja yang lebih tinggi. Dalam mengupayakan agar persyaratan minimum perangkat untuk Versi 5.0 tidak berubah, kami akan menggunakan strategi pengoptimalan kinerja yang lebih ketat untuk memastikan bahwa game dapat berjalan dengan stabil setelah update versi.<br/>
                    <br/>
                    Perangkat yang mendapatkan penyesuaian adalah sebagai berikut:
                    <br/>
                    iOS<br/>
                    Perangkat dengan prosesor A12 ke bawah<br/>
                    <br/>
                    Android<br/>
                    Perangkat dengan prosesor Snapdragon 865, Dimensity 1200 (8050), Kirin 9000SL, atau Samsung Exynos 1080 ke bawah<br/>
                    <br/>
                    Playstation®<br/>
                    Playstation®4 Series (semua)<br/>
                    <br/>
                    Dibandingkan dengan versi saat ini, perangkat yang disebutkan di atas mungkin akan mengalami penurunan tampilan gambar setelah update Versi 5.0.<br/>
                    Contoh: Apabila kamu memainkan permainan di perangkat yang disebutkan di atas, maka akurasi beberapa detail gambar dan benda-benda kecil akan berkurang, jarak efektif sebagian efek khusus akan berkurang, dan sebagainya.<br/>
                    <br/>
                    Untuk detail lebih lanjut, silakan mengacu pada: Spesifikasi Minimum dan Spesifikasi Rekomendasi Game<br/>
                    https://genshin.hoyoverse.com/id/news/detail/113097<br/>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
