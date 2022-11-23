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
            'image'=> 'the-architecture-of-love.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Cara Menyimpan Rahasia (How to Keep a Secret)',
            'author'=> 'Sarah Morgan',
            'year'=> 2022,
            'synopsis'=> 'Lauren dan Jenna Stewart bukan sekadar kakak-adik yang kompak, sejak kecil mereka sahabat terbaik untuk satu sama lain. Meski begitu, masing-masing menyimpan rahasia terdalam yang bahkan tak sanggup mereka bagi. Nancy Stewart mungkin harus puas hanya dengan menonton kedekatan kedua putrinya, Lauren dan Jenna, satu hal yang tak pernah ia miliki dengan mereka. Ia memang bukan ibu yang sempurna, tetapi sanggupkah ia membeberkan alasannya? Tentu saja tidak. Akan tetapi, pada suatu musim panas terjadi peristiwa mengejutkan dengan efek domino yang menjungkirbalikkan hidup ketiga wanita Stewart. Dan saat itulah rahasia demi rahasia perlahan terungkap, memaksa mereka belajar lagi menjadi keluarga.',
            'image'=> 'cara-menyimpan-rahasia.jpg'
        ]);

        Book::create([
            'publisher_id' => 1,
            'title' => 'Harlequin Koleksi Istimewa: Cinta Tak Terduga Sang Pangeran',
            'author' => 'Sarah Morgan',
            'year' => 2017,
            'synopsis' => 'Demi menyelamatkan takhta dan adiknya, Layla nekat menyeberangi gurun menuju benteng musuh. Ia berniat menawarkan kerja sama dengan Raz demi menyelamatkan kerajaan mereka dari sang musuh besar. Ia memberanikan diri menemui Raz, seorang pangeran yang, di luar dugaannya, begitu tampan.',
            'image' => 'cinta-tak-terduga-sang-pangeran.jpg'
        ]);

        Book::create([
            'publisher_id' => 1,
            'title' => 'Menjelang Tengah Malam (Fat Tuesday)',
            'author' => 'Sandra Brown',
            'year' => 2018,
            'synopsis' => 'Burke Basile, kehilangan partnernya dalam tugas. Ketika persidangan tidak memberinya keadilan yang diinginkan, ia memutuskan untuk membalas dendam dengan caranya sendiri. Ia akan menculik istri pengacara yang membantu membebaskan sang pembunuh, si cantik Remy Duvall.',
            'image' => 'menjelang-tengah-malam.jpg'
        ]);

        Book::create([
            'publisher_id' => 3,
            'title' => 'PANDAVA SERIES #3: ARU SHAH AND THE TREE OF WISHES',
            'author' => 'Roshani Chokshi',
            'year' => 2020,
            'synopsis' => 'Bukan karena piama Spider-Man-nya rusak dan dia harus menggantinya dengan piama Iron Man. Juga bukan karena Aiden masih tidak menunjukkan tanda-tanda ketertarikan terhadapnya. Permasalahannya jauh lebih pelik: Aru tidak tahu apakah dia memihak kubu yang tepat dalam peperangan yang akan menjelang. Apakah dewa-dewi sepenuhnya benar atau ada rahasia yang melatarbelakangi dendam sang Penidur, ayah Aru sekaligus orang yang dikutuk menghancurkan dunia?',
            'image' => 'arushah.jpg'
        ]);

        Book::create([
            'publisher_id' => 3,
            'title' => 'CARAVAL',
            'author' => 'Stephanie Garber',
            'year' => 2016,
            'synopsis' => 'Tella kabur dari rumah demi datang ke Caraval, muak dengan kekejaman sang ayah. Scarlett, sang kakak, berusaha mengejar dengan pertolongan dari seorang pemuda asing, Julian. Di dalam, kalian akan temukan lebih banyak keajaiban daripada yang bisa disaksikan orang lain seumur hidup mereka. Tella menghilang.',
            'image' => 'caraval.jpg'
        ]);

        Book::create([
            'publisher_id' => 3,
            'title' => 'REALM BREAKER',
            'author' => 'Victoria Aveyard',
            'year' => 2021,
            'synopsis' => 'Corayne an-Amarat adalah satu-satunya harapan untuk menyelamatkan dunia dari malapetaka. Namun, dia tidak akan sendirian. Sekelompok orang yang mustahil disatukan, anehnya memutuskan bekerja sama.',
            'image' => 'realm-breaker.jpg'
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'How to Meet Your Self',
            'author' => 'Dr. Nicole LePera',
            'year' => 2022,
            'synopsis' => "At the root of all healing work is awakening consciousness, a process of shining light into the darkness of the unknown. In recent 'year's, Dr. Nicole LePera has become the leading voice in psychological self-healing, helping millions of people around the world rise out of survival mode to consciously create authentic lives they love. In her first book, , she shares an interactive workbook designed to help every reader uncover their Authentic Self.",
            'image' => 'how-to-meet-yourself.jpg'
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'Mindful Cognitive Behavioral Therapy',
            'author' => 'Seth J. Gillihan',
            'year' => 2022,
            'synopsis' => 'Mental health professionals have many science-based techniques for alleviating symptoms like anxiety and depression. However, these reductive approaches often don’t deliver the lasting peace we long for. Practicing psychologist and one of the top popularizers of Cognitive Behavioral Therapy (CBT), Dr. Seth Gillihan believes we need to do more than relieve our symptoms to become healthy and whole. To achieve long-lasting health and well-being, we must embrace the spiritual in our healing',
            'image' => 'mindful-cognitive-behavioral-therapy.jpg'
        ]);

        Book::create([
            'publisher_id' => 2,
            'title' => 'Matematika by Arif Ediyanto dan Maya Harsasi untuk Kelas 1 SMK/MAK',
            'author' => 'Arif Ediyanto dan Maya Harsasi',
            'year' => 2022,
            'synopsis' => 'Buku ini disusun berdasarkan Kurikulum Merdeka. Sesuai semangat dasar Kurikulum Merdeka, buku ini kaya dengan asesmen berbasis AKM (Asesmen Kompetensi Minimum), yang menguji kemampuan berpikir/kognitif peserta didik serta Proyek, yang mengasah karakter sesuai Profil Pelajar Pancasila dan keterampilan abad ke-21.',
            'image' => 'matematika.jpg'
        ]);

        Book::create([
            'publisher_id' => 2,
            'title' => 'SPLASH Smart Path to Learning English SMK/MAK Kelas 1',
            'author' => 'Anik M.Indriastuti',
            'year' => 2022,
            'synopsis' => 'SPLASH (Smart Path to Learning English) SMK/MAK disusun berdasarkan Capaian Pembelajaran (CP) Kurikulum Merdeka. Buku ini dilengkapi dengan berbagai aktivitas pembelajaran yang sudah mencakup 6 elemen kemampuan bahasa inggris, yaitu listening, reading, speaking, writing, viewing, dan presenting. Buku ini juga dilengkapi dengan media digital (QR Code) berupa file audio dan CBT.',
            'image' => 'splash.jpg'
        ]);

        Book::create([
            'publisher_id' => 2,
            'title' => 'Sejarah by Ratna Hapsari untuk Kelas 1 SMK/MAK',
            'author' => 'Ratna Hapsari',
            'year' => 2022,
            'synopsis' => 'Buku ini disusun berdasarkan Kurikulum Merdeka. Sesuai semangat dasar Kurikulum Merdeka, buku ini kaya dengan asesmen berbasis AKM (Asesmen Kompetensi Minimum), yang menguji kemampuan berpikir/kognitif peserta didik serta Proyek, yang mengasah karakter sesuai Profil Pelajar Pancasila dan keterampilan abad ke-21.',
            'image' => 'sejarah.jpg'
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'The Perfect Child',
            'author' => 'Lucinda Berry',
            'year' => 2019,
            'synopsis' => "Christopher and Hannah are a happily married surgeon and nurse with picture-perfect lives. All that’s missing is a child. When Janie, an abandoned six-year-old, turns up at their hospital, Christopher forms an instant connection with her, and he convinces Hannah they should take her home as their own.",
            'image' => 'the-perfect-child.jpg'
        ]);


    }
}
