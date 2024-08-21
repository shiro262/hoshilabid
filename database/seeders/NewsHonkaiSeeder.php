<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsHonkaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_honkais')->insert([
            [
                'title' => "Berita Intel Ai-chan: [Pengejaran Phoenix] Segera Dibuka",
                'description' => " Event pilihan baru [Pengejaran Phoenix] akan hadir di minggu ke-2 setelah update. Kali ini, Kapten akan menggunakan bola untuk menghancurkan mekanisme dan mengalahkan musuh untuk mengambil kembali kereta bersama Fu Hua, Herrscher of Sentience, dan yang lainnya!",
                'banner' => "banner_1.png",
                'date' => "9/01/2024",
            ],

            [
                'title' => "Intel Ai-chan: [Bintang di Mata Bulan] Segera Dibuka",
                'description' => " Event baru [Bintang di Mata Bulan] akan dimulai setelah update versi. Helia dan Coralie juga akan bertemu dengan Kapten di dalam story event. Ikuti Ai-chan untuk info lebih lanjut~",
                'banner' => "banner_2.png",
                'date' => "10/01/2024",
            ],

            [
                'title' => "Battlesuit Rank-S Baru Deepspace Anchor: First Light Debut!",
                'description' => " v7.3 segera hadir! Battlesuit Rank-S Senadina [Deepspace Anchor: First Light] debut! Hari ini kami akan membawakan info tentang Battlesuit baru dan Equipment-nya. Ayo kita lihat sama-sama!",
                'banner' => "banner_3.png",
                'date' => "10/02/2024",
            ],

            [
                'title' => "Battlesuit Rank-A Helia [Valkyrie Boltstorm] Debut",
                'description' => " Battlesuit Rank-A baru [Valkyrie Boltstorm] debut di v7.3! Ayo kita lihat info terbarunya sama-sama!",
                'banner' => "banner_4.png",
                'date' => "11/02/2024",
            ],

            [
                'title' => " Battlesuit Rank-A Coralie [Valkyrie Blastmetal] Debut",
                'description' => " Battlesuit Rank-A baru [Valkyrie Blastmetal] debut di v7.3! Ayo kita lihat info terbarunya sama-sama!",
                'banner' => "banner_5.png",
                'date' => "12/02/2024",
            ],

            [
                'title' => " Astral OP - Dream Seeker",
                'description' => " Sistem AstralOp akan hadir setelah update v7.3. Ketika Ketua party adalah Battlesuit dengan Astral Ring, AstralOp dapat ditambahkan ke party. Setelah karakter memasuki Stellar Outburst, AstralOp akan masuk ke medan pertempuran untuk menyerang dan meningkatkan buff Astral Ring.",
                'banner' => "banner_6.png",
                'date' => "13/02/2024",
            ],

            [
                'title' => " Preview Konten Baru - Event Pilihan Hidangan Tengan Laudan Hadir!",
                'description' => " Restoran terkenal di Oxia, Sweet Tooth, sedang menghadapi krisis besar. Koki dan pelayan mengundurkan diri secara massal. Mohon bantuannya, Kapten.",
                'banner' => "banner_7.png",
                'date' => "20/02/2024",
            ],

            [
                'title' => "  Astral OP - Songque Debut",
                'description' => " Hari ini kami akan membawakan info tentang AstralOp Rank-S [Songque]. Ayo kita lihat sama-sama~",
                'banner' => "banner_8.png",
                'date' => "14/02/2024",
            ],

            [
                'title' => "Battlesuit Rank-S Baru Mad Pleasure: Shadowbringer Hadir",
                'description' => " Versi baru segera hadir! Battlesuit Rank-S Thelema Mad Pleasure: Shadowbringer hadir! Hari ini kami akan membawakan info tentang Battlesuit baru dan Equipment-nya. Ayo kita lihat sama-sama.",
                'banner' => "banner_9.png",
                'date' => "09/04/2024",
            ],

            [
                'title' => "Preview Konten Baru - Seven Shu dalam Labirin",
                'description' => " Bagian 2 Chapter II Seven Shu dalam Labirin segera hadir! Dipimpin oleh Songque, mereka berangkat menuju Perpustakaan Tombstone dan Koridor Topeng, mencoba membangunkan Shu yang tertidur. Sementara itu, sebutir peluru tengah diam-diam diisi...",
                'banner' => "banner_10.png",
                'date' => "11/04/2024",
            ],

            [
                'title' => "Pemberitahuan Penutupan Layanan Huawei unutk Honkai Impact 3",
                'description' => "Mulai 25 Juli 2024, Huawei tidak lagi menyediakan Terima kasih atas dukungan Kapten selama ini! layanan login game dan akan menghapus aplikasi Honkai Impact 3 dari Huawei AppGallery dikarenakan penyesuaian operasional.",
                'banner' => "banner_11.png",
                'date' => "15/04/2024",
            ],

            [
                'title' => "Preview Konten Baru - Kontes Undangan Terbang ke Oxia",
                'description' => " Ayo daftar sekarang untuk mengikuti Kontes Undangan Terbang ke Oxia pertama yang diselenggarakan oleh Don't Look Back Studio dan Octave Wireless. Konon katanya setelah kejuaraan ini, grup akan mendanai studio untuk membangun sebuah arkade bertema! Target, kejuaraan, berangkat.",
                'banner' => "banner_12.png",
                'date' => "16/04/2024",
            ],

            [
                'title' => "Honkai Impact 3 Segera Rilis di APP Store Mac Secara Global!!",
                'description' => " Halo, Kapten! Setelah update versi, Honkai Impact 3 versi Mac akan dirilis secara global! Kapten akan punya lebih banyak pilihan platform untuk bermain. Silakan simak info lebih lanjut dari Ai-chan~",
                'banner' => "banner_13.png",
                'date' => "19/04/2024",
            ],

            [
                'title' => "FAQ Menghubungkan Akun Huawei dengan Akun Hoyoverse",
                'description' => " Layanan aplikasi Honkai Impact 3 di Huawei akan diberhentikan pada 25 Juli. Untuk mencegah masalah terjadinya kehilangan akun dan lainnya, silakan Kapten selesaikan transfer akun secepatnya antara 25 April - 25 Juli dengan mengikuti panduan di bawah ini. Terima kasih atas kerja sama dan dukungannya, Kapten! ",
                'banner' => "banner_14.png",
                'date' => "25/04/2024",
            ],

            [
                'title' => "Pengumuman Update Versi Undangan Perjamuan Eksentrik",
                'description' => " Bersulang mengikuti perintahnya- dan kamu sudah bergabung ke dalam jamuan eksentrik ini! Selamat datang di v7.4 Undangan Perjamuan Eksentrik... ",
                'banner' => "banner_15.png",
                'date' => "25/04/2024",
            ],
            [
                'title' => "16 Pengumuman Update Versi Undangan Perjamuan Eksentrik",
                'description' => " v7.5 segera hadir! Battlesuit Rank-S baru Lone Destruction: Shadowchaser debut! Ayo kita lihat info terbarunya sama-sama!... ",
                'banner' => "banner_16.png",
                'date' => "25/04/2024",
            ],
            [
                'title' => "Pengumuman Update v7.5 Perang dan Bayangan",
                'description' => " Jika ketakutan manusia bisa menarik bayangan, maka yang terbentuk dari ketakutan bayangan adalah cahaya lentera... ",
                'banner' => "banner_17.png",
                'date' => "06/06/2024",
            ],
            [
                'title' => "Battlesuit Rank-S Baru Jovial Deception: Shadowdimmer Hadir",
                'description' => " v7.6 segera hadir! Battlesuit Rank-S Songque, Jovial Deception: Shadowdimmer, debut! Hari ini kami akan membawakan info tentang Battlesuit baru ini beserta Equipment-nya. Ayo kita lihat sama-sama!... ",
                'banner' => "banner_18.png",
                'date' => "15/07/2024",
            ],
            [
                'title' => "AstralOp Baru - Serapeum Hadir",
                'description' => " Hari ini kami akan membawakan info tentang AstralOp Rank-S Serapeum. Ayo kita lihat sama-sama~... ",
                'banner' => "banner_19.png",
                'date' => "16/07/2024",
            ],
            [
                'title' => "Preview Konten Baru - Fortune Mall Segera Dibuka",
                'description' => " Dear Kapten, Fortune Mall akan segera dibuka untuk waktu terbatas di v7.6! Selama event berlangsung, ikuti event Crate dan beli Bundle pilihan untuk mendapatkan Outfit baru Gokudo Brushstrokes untuk Cosmic Expression dan item menarik lainnya! Informasi tentang event Crate juga akan diumumkan hari ini. Ayo lihat bareng Ai-chan~... ",
                'banner' => "banner_20.png",
                'date' => "17/07/2024",
            ],
            [
                'title' => "Preview Konten Baru: Rangkuman Info Penting",
                'description' => " Hari ini kami akan memberi informasi penting mengenai hadiah Story dan event LITE di v7.6! Silakan baca untuk info lebih lanjut!... ",
                'banner' => "banner_21.png",
                'date' => "18/07/2024",
            ],
            [
                'title' => "Pengumuman Update v7.6 Mimpi dan Fajar",
                'description' => " Mari kita tulis masa depan bersama di atas daun emas. Selamat datang di v7.6 Mimpi dan Fajar!... ",
                'banner' => "banner_22.png",
                'date' => "25/07/2024",
            ], 

        ]);
    }
}
