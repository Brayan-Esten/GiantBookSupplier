<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'publisher_id'=> 1,
            'title'=> 'The Architecture of love',
            'author'=> 'Ika Natasa',
            'year'=> 2016,
            'synopsis'=> "New York mungkin berada di urutan teratas daftar kota yang paling banyak dijadikan setting cerita atau film. Di beberapa film Hollywood, mulai dari Nora Ephron's You've Got Mail hingga Martin Scorsese's Taxi Driver, New York bahkan bukan sekadar setting namun tampil sebagai karakter yang menghidupkan cerita.",
            'image'=> 'theArchitectureOfLove.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Krisis Kebebasan',
            'author'=> 'Albert Camus',
            'year'=> 2019,
            'synopsis'=> 'Kebebasan bagi Albert Camus bukanlah sebuah hadiah cuma-cuma, melainkan sesuatu yang harus diperjuangkan. Dengan ini Albert Camus ingin menegaskan bahwa dalam rezim apapun, apalagi yang paling totaliter dan represif, kita jangan bermimpi akan memperoleh kebebasan secara cuma-cuma. Kebebasan tersebut harus diperjuangkan. Sayangnya lebih sering penguasa menindas kebebasan tersebut, sehingga cendekiawan, seniman, dan pers yang diandalkan adalah kelompok paling depan dalam memperjuangkan kebebasan pun akan menjadi bungkam. Inilah yang menimbulkan krisis kebebasan.',
            'image'=> 'krisisKebebasan.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'The Tokyo Zodiac Murders',
            'author'=> 'Soji Shimada',
            'year'=> 1981,
            'synopsis'=> 'Pada suatu malam bersalju tahun 1936, seorang seniman dipukuli hingga tewas di balik pintu studionya yang terkunci di Tokyo. Polisi menemukan surat wasiat aneh yang memaparkan rencananya untuk menciptakan Azoth Ósang wanita sempurnaÓdari potongan-potongan tubuh para wanita muda kerabatnya.',
            'image'=> 'theTokyoZodiac.jpg'
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> 'If I Ain`t Got You',
            'author'=> 'Nima',
            'year'=> 2003,
            'synopsis'=> 'Aszumi dikejar waktu! Usia yang sudah melewati angka tiga membawanya pada satu permasalahan klasik, JODOH. Orangtua Aszumi ingin gadis itu segera menikah. Tentu saja Aszumi ingin menikah, tapi bukan karena sudah berumur 32 atau karena adik laki-lakinya sudah lebih dulu berkeluarga. Gadis itu ingin menikah karena cinta. Riza, lelaki menyebalkan yang sama sekali jauh dari kriterianya, hadir di kehidupan Aszumi. Dan gilanya, Riza tiba-tiba menawarkan pernikahan. Sebuah penawaran yang semakin sulit ditolak karena laki-laki itu ternyata berhasil mencuri hati keluarganya. Di waktu yang tak terduga, angin telah berubah arah. Rindu perlahan datang, kemudian bersemi indah, menjadikan pernikahan terasa bukan lagi sesuatu yang salah. Tapi, saat itulah Aszumi tahu, dia sudah dibohongi.',
            'image'=> 'ifIAintGotYou.jpg'
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Memperkaya Otak: Cara memaksimalkan potensi setiap pembelajar',
            'author'=> 'Eric Jensen',
            'year'=> 2008,
            'synopsis'=> '101 Cara Pelatihan dan Pembelajaran Aktif 2. 200+ Strategi dan Proyek Pembelajaran Aktif untuk Melibatkan Kecerdasan Siswa Edisi Kedua',
            'image'=> 'memperkayaOtak.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Cara Menyimpan Rahasia (How to Keep a Secret)',
            'author'=> 'Sarah Morgan',
            'year'=> 2022,
            'synopsis'=> 'Lauren dan Jenna Stewart bukan sekadar kakak-adik yang kompak, sejak kecil mereka sahabat terbaik untuk satu sama lain. Meski begitu, masing-masing menyimpan rahasia terdalam yang bahkan tak sanggup mereka bagi. Nancy Stewart mungkin harus puas hanya dengan menonton kedekatan kedua putrinya, Lauren dan Jenna, satu hal yang tak pernah ia miliki dengan mereka. Ia memang bukan ibu yang sempurna, tetapi sanggupkah ia membeberkan alasannya? Tentu saja tidak. Akan tetapi, pada suatu musim panas terjadi peristiwa mengejutkan dengan efek domino yang menjungkirbalikkan hidup ketiga wanita Stewart. Dan saat itulah rahasia demi rahasia perlahan terungkap, memaksa mereka belajar lagi menjadi keluarga.',
            'image'=> 'caraMenyimpanRahasia.jpg'
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Memories of a Name Part 1',
            'author'=> 'L,Zeth',
            'year'=> 2022,
            'synopsis'=> 'Seumur hidupnya, Matthew Bennet selalu berusaha menjauhi masalah. Namun, tiba-tiba saja dia diculik, ditempatkan di gedung yang terkunci, dan dituduh sebagai pembunuh. Untuk dapat selamat, dia harus memberikan nama korban atau bersembunyi dari si penculik selama sepuluh jam. Seolah itu belum cukup buruk, Matthew mendapati kalau empat orang yang juga diculik bersamanya ternyata merupakan orang-orang yang dulu merundungnya di SMA Polaris. Ketika pelaku penculikan yang bernama Victor mulai membunuh orang pertama, Matthew pun tak punya pilihan selain berupaya mencari tahu nama yang diminta Victor. Caranya, dengan mencari petunjuk yang telah ditinggalkan pelaku. Dapatkah Matthew bekerja sama dengan orang yang dia benci dan mendapatkan nama tersebut, sebelum si pembunuh menemukan mereka?',
            'image'=> "memoriesOfANamePart1.jpg"
        ]);

        Book::create([
            'publisher_id'=> 3,
            'title'=> "Filosofi Teras",
            'author'=> "Henry Manamping",
            'year'=> 2019,
            'synopsis'=> "Filosofi Teras adalah sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda. Buku ini ditulis untuk menjawab permasalahan tentang tingkat kekhawatiran yang cukup tinggi dalam skala nasional, terutama yang dialami oleh anak muda.",
            'image'=> "filosofiTeras.jpg"
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> "Merangkul Beruang Merah",
            'author'=> "Ade Irma Elvira",
            'year'=> 2016,
            'synopsis'=> "Melanjutkan pendidikan setinggi-tingginya dan sampai ke luar negeri adalah cita-cita banyak orang, baik yang kehidupan materinya melimpah ruah, pas-pasan atau yang kekurangan sekalipun. Begitu juga denganku. Namaku Vira, aku terlahir keluarga biasa-biasa saja namun berlimpah dengan kasih sayang orangtuaku.",
            'image'=> "merangkulBeruangMerah.jpg"
        ]);

        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Merawat Perkawinan - Menyikapi Badai Rumah Tangga',
            'author'=> 'Prof. Dr. Sawitri Supardi Sadarjoen',
            'year'=> 2020,
            'synopsis'=> 'Siapa pun tidak ingin biduk rumah tangganya berantakan apalagi hancur. Sedangkan berbagai cobaan atau godaan baik yang datang dari luar atau dari dalam, mempunyai efek yang menghancurkan keharmonisan sebuah rumah tangga. Badai rumah tangga yang sering menghantam biasanya tentang perilaku suami atau istri. Istri mencurigai suami selingkuh, suami mencurigai istri serong. Ujungnya terjadi keributan atau salah paham. Apabila dibiarkan akan semakin tajam berujung pada perceraian. Perceraian karena emosional semata, maka yang akan dirugikan adalah anak. Hal yang tidak disadari suami istri, anak pun memiliki problema tersendiri, entah problem sekolah atau pergaulan yang membutuhkan bimbingan orangtuanya.',
            'image'=> 'merawatPerkawinan.jpg'
        ]);
    }
}
