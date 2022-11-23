<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Publisher::create([
            'name'=> 'Gramedia Pustaka Utama',
            'address'=> 'Gedung Kompas Gramedia Blok 1 lt.5, Jl. Palmerah Barat No.29-37, Jakarta 10270, Indonesia',
            'phone'=> '(021) 53650110/11',
            'email'=> 'redaksi@gramediapustakautama.id',
            'image'=> 'gramedia.png'
        ]);

        Publisher::create([
            'name'=> 'PT Penerbit Erlangga',
            'address'=> 'Jl. H. Baping Raya No. 100 Ciracas, Jakarta Timur 13740',
            'phone'=> '(021) 8717006',
            'email'=> 'support@erlangga.co.id',
            'image'=> 'erlangga.png'
        ]);

        Publisher::create([
            'name' => 'Noura Publishing',
            'address' => 'Jl. Raya Jagakarsa No.40, RT.7/RW.4, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12620',
            'phone' => '02178880556',
            'email' => "promosi@noura.mizan.com",
            'image' => "noura.png",
        ]);

        Publisher::create([
            'name' => 'Harper Colins',
            'address' => 'HarperCollins Publishers 195 Broadway New York, NY 10007',
            'phone' => '8002427737',
            'email' => 'consumercare@harpercollins.com',
            'image' => 'harper-colins.png'
        ]);
    }
}
