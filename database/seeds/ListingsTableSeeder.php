<?php

use Illuminate\Database\Seeder;
use App\Listing;
class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($faker = 1; $faker <=10; $faker++):

        Listing::create([
            'user_id'     => 1,
            'category_id' => 1,
            'title'       => 'Luxury Restourant',
            'phone'       => '069313251',
            'email'       => 'madysanya@gmail.com',
            'image'       => "1.jpg",
            'review'      => '12',
            'rate'        => '4',
            'location'    => 'Kom Pot',
            'description' => 'Sed non neque elit. Sed ut imperdie.',
            'address'     => '27th Brooklyn New York, NY 10095',
            'active'      => '1'
        ]);

        // endfor;
    }
}
