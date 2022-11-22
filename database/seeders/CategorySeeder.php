<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Fiction'
        ]);

        Category::create([
            'name' => 'NonFiction'
        ]);

        Category::create([
            'name' => 'Romance'
        ]);

        Category::create([
            'name' => 'Psychology'
        ]);

        Category::create([
            'name' => 'Mystery'
        ]);
    }
}
