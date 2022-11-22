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
            'address'=> 'Jl. Palmerah Barat, RT.1/RW.2, Gelora, Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270, Indonesia',
            'phone'=> '021-53650111',
            'email'=> 'gramedia@email.com',
            'image'=> 'img\Publisher\Gramedia.png'
        ]);

        Publisher::create([
            'name'=> 'Elex Media Komputindo',
            'address'=> 'Kompas Gramedia, Gedung Kompas-Gramedia Lantai 2, Jl. Palmerah Barat No. 29 - 32, Gelora, Tanah Abang, Jl. Palmerah Barat No.29 - 32, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'phone'=> '021-53650110',
            'email'=> 'EMK@email.com',
            'image'=> 'img\Publisher\Emk.png'
        ]);

        Publisher::create([
            'name'=> 'Kompas',
            'address'=> 'Gramedia, Unit 2 Gedung Kompas, Jl. Palmerah Sel. No.26-28, RT.4/RW.2, Gelora, Kec. Palmerah, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 11430',
            'phone'=> '021-53670882',
            'email'=> 'Kompas@email.com',
            'image'=> 'img\Publisher\Kompas.jpg'
        ]);
    }
}
