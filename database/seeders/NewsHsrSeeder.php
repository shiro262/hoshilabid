<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsHsrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_hsrs')->insert([
            [
                'title' => "Undangan Perayaan",
                'description' => "Event web kepulangan Undangan Perayaan telah dirilis, ikuti untuk mendapatkan hingga Stellar Jade ×540 dan hadiah lainnya!. Kirim undangan kepada temanmu di...",
                'date' => "06/02/2024",
                'banner' => "undangan.png",
            ],
            [
                'title' => "Trailer Karakter Acheron: Warnamu | Honkai: Star Rail",
                'description' => "Perjalanan kita kembali dimulai. Kehidupan lewat seperti hujan sesaat, dan pada akhirnya menyatu dengan tanah. Semoga lain kali kita bertemu ... di bawah langit yang biru.",
                'date' => "26/03/2024",
                'banner' => "acheron.jpg",
            ],
            [
                'title' => "Penjelasan Update Versi 2.1 Berlari Menuju Jurang Kegelapan",
                'description' => "Menangis dalam kegembiraan dan tertawa dalam kesedihan, menikmati mimpi orang gila dalam sirop yang pahit.",
                'date' => "27/03/2024",
                'banner' => "penjelasanupdt.jpg",
            ],
            [
                'title' => "Event web kepulangan Perjalanan Kembali ke Bintang-Bintang telah dirilis, ikuti untuk mendapatkan hingga Stellar Jade ×480 dan hadiah lainnya!",
                'description' => "Dear Trailblazer, rekan-rekan Express menunggumu loh. Ayo lakukan perjalanan bersama dan kembali menuju petualangan galaksi! Dapatkan hingga Stellar Jade ×480!",
                'date' => "27/03/2024",
                'banner' => "eventweb.png",
            ],
            [
                'title' => "Mendekati Star Rail — Gallagher: Minum Lebih Banyak Air & Kurangi Minum Soda | Honkai: Star Rail",
                'description' => "Dia adalah petugas keamanan yang paling ahli dalam meracik minuman, dan juga bartender yang paling ahli dalam menegakkan keadilan. Dia tidak hanya bisa meracik minuman-minuman ajaib yang akan membuat alismu terangkat,...",
                'date' => "28/03/2024",
                'banner' => "gallagher.jpg",
            ],
            [
                'title' => "Trailer Karakter Aventurine: Jari Jemari Emas | Honkai: Star Rail",
                'description' => "Pada akhirnya kepura-puraan kerap kali menyembunyikan sesuatu, meskipun pada awalnya tidak ada yang disembunyikan.",
                'date' => "16/04/2024",
                'banner' => "trailer aventurine.jpg",
            ],
            [
                'title' => "Mendekati Star Rail — Aventurine: Tangan Mana yang Mengenggam Koin? | Honkai: Star Rail",
                'description' => "Sekeping chip beratnya mungkin hanya beberapa gram, tapi ia memiliki kekuatan dahsyat untuk memengaruhi keseimbangan timbangan. Jari jemari...",
                'date' => "17/04/2024",
                'banner' => "aventurine.jpg",
            ],
            [
                'title' => "Trailer Versi 2.2: Jatuh Air Mata, Kala Sadar Menyapa | Honkai: Star Rail",
                'description' => "Kenangan adalah pembukaan dari mimpi, sedangkan kelupaan adalah tirai penutup mimpi.",
                'date' => "26/04/2024",
                'banner' => "trailer 2.2.jpg",
            ],
            [
                'title' => "Mendekati Star Rail — Robin: Presale Konser 'Hidup Bagaikan Lagu' Laris Manis! | Honkai: Star Rail",
                'description' => "Irama dunia adalah denyut nadi jutaan nyawa. Dengarkan setiap not yang berdetak, rasakan irama yang mengelilingimu. Ketika alam semesta runtuh, hanya musik yang dapat menyelamatkan hati yang hancur. Rayakan...",
                'date' => "01/05/2024",
                'banner' => "Robinpresale.png",
            ],
            [
                'title' => "Trailer Perjalanan Seribu Bintang: Jika Memiliki Sepasang Sayap | Honkai: Star Rail",
                'description' => "Kalau memiliki sepasang sayap, maka kita akan terbang menuju langit. Meskipun kita ditakdirkan untuk jatuh suatu saat nanti. Tidak perlu mendambakan keabadian, dan tidak perlu takut akan momen ini.",
                'date' => "03/05/2024",
                'banner' => "seribubintang.jpg",
            ],
            [
                'title' => "Pra-Unduh Versi 2.2 Kini Telah Dibuka!",
                'description' => "Halo, Trailblazer! Pra-unduh Versi 2.2 telah dibuka. Trailblazer dapat mengunduh sebagian sumber data dengan mengikuti panduan berikut untuk masuk ke dalam game dengan lebih cepat setelah update dan maintenance versi...",
                'date' => "06/05/2024",
                'banner' => "praunduh.jpg",
            ],
            [
                'title' => "Trailer Karakter Robin: Menari Mengikuti Ritme | Honkai: Star Rail",
                'description' => "Menari mengikuti ritme di antara bintang-bintang, apa itu bisa menyelamatkan hati dari kesedihan? Kalau aku tidak pernah melihat matahari, bagaimana mungkin aku tahu kalau harapan memiliki bulu dan sayap?",
                'date' => "07/05/2024",
                'banner' => "robin.png",
            ],
            [
                'title' => "Penjelasan Update Versi 2.2 Jatuh Air Mata, Kala Sadar Menyapa",
                'description' => "Kenangan adalah pembukaan dari mimpi, sedangkan kelupaan adalah tirai penutup mimpi.",
                'date' => "08/05/2024",
                'banner' => "Update Versi 2.2.jpg",
            ],
            [
                'title' => "Mendekati Star Rail — Trailblazer (Harmony): Demi Hari Esok Usai Bermimpi | Honkai: Star Rail",
                'description' => "Setiap orang pasti tersesat berkali-kali. Mereka mungkin ragu dan tidak tahu ke mana mereka harus pergi. Hal itu terjadi baik di dalam dunia mimpi maupun di luar dunia mimpi. Tapi jangan khawatir, semua orang pasti mengalami...",
                'date' => "08/05/2024",
                'banner' => "MendekatiSR.jpg",
            ],
            [
                'title' => "Event Live Streaming Discord Quest Honkai: Star Rail versi 2.2",
                'description' => "Halo, Trailblazer: Event Discord Quest telah dimulai. Ikuti event ini dan lakukan live streaming Honkai: Star Rail versi 2.2 untuk memenangkan Stellar Jade dan hadiah lainnya yang melimpah!",
                'date' => "09/05/2024",
                'banner' => "discordquest.png",
            ],
            [
                'title' => "Mendekati Star Rail — Boothill: Kuvret-Kuvret Tulul | Honkai: Star Rail",
                'description' => "Tulul-tulul IPC! Kalian pikir kalian bisa membiarkan burung dodol itu asal ceplas-ceplos di acara kuvret ini tanpa membayar harganya? Anggap saja ini sebagai peringatan, kamvret-kamvret tulul. Saksikan program khusus Interastral...",
                'date' => "22/05/2024",
                'banner' => "boothillbanner.jpg",
            ],
            [
                'title' => "Program Khusus Versi 2.3 Selamat Tinggal, Penacony | Honkai: Star Rail",
                'description' => "Hai, Trailblazer! Program Khusus Selamat Tinggal, Penacony Versi 2.3 Honkai: Star Rail akan resmi dimulai pada 7 Juni 2024 19:30 (UTC+8). Live streaming kali ini akan membawakan pengenalan karakter Firefly dan Jade, beserta preview...",
                'date' => "03/06/2024",
                'banner' => "byepenacony.jpg",
            ],
            [
                'title' => "Mendekati Star Rail — Firefly: Operasi Pencegahan Kebakaran Laut | Honkai: Star Rail",
                'description' => "Orang paling berbahaya di antara Stellaron Hunter ternyata adalah %&*#%#Halo, aku Silver Wolf. Edisi kali ini lumayan juga, dan patut dipuji. Semoga acara kalian bisa terus mempertahankan kualitas seperti ini ya, dan jangan sembarangan...",
                'date' => "12/06/2024",
                'banner' => "fireflyburn.jpg",
            ],
            [
                'title' => "Penjelasan Update Versi 2.3 Selamat Tinggal, Penacony",
                'description' => "Ekspedisi perintisan di Penacony telah mencapai akhir yang indah. Sekarang waktunya untuk berangkat ke perhentian berikutnya — tapi sebelum itu, ucapkan selamat tinggal pada malam yang panjang di belakangmu.",
                'date' => "19/06/2024",
                'banner' => "Updatever2.3.png",
            ],
            [
                'title' => "Mendekati Star Rail — Jade: Aku Tanggung Biaya Upgrade Tiketmu | Honkai: Star Rail",
                'description' => "Upacara pembukaan Pertunjukan Bela Diri Bintang Xianzhou Luofu akan segera dimulai. Apa kamu masih kesulitan menanggung biaya perjalanan antarbintang yang tinggi? Jangan khawatir! Hubungi saja Pegadaian Bonajade...",
                'date' => "03/07/2024",
                'banner' => "jade.jpg",
            ],
            [
                'title' => "Trailer Perjalanan Seribu Bintang: Stoneheart's Oath Ring: Kedua Sisi Neraca | Honkai: Star Rail",
                'description' => "Pemimpin Departemen Investasi Strategis, Diamond, jarang muncul di depan umum. Sebuah kelompok bernama Sepuluh Orang Berhati Batu biasa berdiri di garis depan menggantikannya. Saat menghadapi topik penting yang...",
                'date' => "14/07/2024",
                'banner' => "stoneheart.jpg",
            ],
            [
                'title' => "Mendekati Star Rail — Yunli: Yang Bertelanjang Kaki Tidak Takut Pakai Sepatu | Honkai: Star Rail",
                'description' => "Ritual Bela Diri akan segera dimulai. Tamu pendekar pedang yang kedua paling muda dari Flamewheel Octet juga sudah tiba di Luofu. Sepertinya pertempuran antara para jenius muda tidak bisa dihindari ...",
                'date' => "24/07/2024",
                'banner' => "yunli.jpg",
            ],
            [
                'title' => "Penjelasan Update Versi 2.4 Duel Sengit di Atas Langit Biru",
                'description' => "Ritual Bela Diri akan segera dimulai. Tamu dari seluruh penjuru alam semesta berdatangan, dan di kedalaman dasar penjara yang gelap, cakar dan taring binatang buas yang telah lama terkurung mulai bergemeretak.",
                'date' => "31/07/2024",
                'banner' => "updatever2.4.jpg",
            ],
            [
                'title' => "Catatan Perjalanan Express | Edisi Khusus Perjalanan Paris March 7th: Tantangan di Seluruh Penjuru",
                'description' => "Makna kehidupan, ialah menantang kehebatan. Makna perjalanan, ialah menikmati momen saat ini.",
                'date' => "04/08/2024",
                'banner' => "marchparis.jpg",
            ],
        ]);
    }
}
