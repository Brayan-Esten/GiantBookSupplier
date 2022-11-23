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
            'name' => 'Fantasy'
        ]);

        Category::create([
            'name' => 'Mystery'
        ]);
        
        Category::create([
            'name' => 'Psychology'
        ]);

        Category::create([
            'name' => 'Romance'
        ]);

        Category::create([
            'name' => 'Education'
        ]);
    }
}
