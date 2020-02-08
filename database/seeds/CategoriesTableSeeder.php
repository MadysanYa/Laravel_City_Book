<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name'       => 'Hotels',
        ]);

        Category::create([
            'name'       => 'Shops',
        ]);

        Category::create([
            'name'       => 'Restaurants',
        ]);

        Category::create([
            'name'       => 'Fitness',
        ]);

        Category::create([
            'name'       => 'Events',
        ]);

    }
}
