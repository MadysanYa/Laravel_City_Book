<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name'        => 'Hotel',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Tag::create([
            'name'        => 'Hostel',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Tag::create([
            'name'        => 'Room',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Tag::create([
            'name'        => 'Spa',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Tag::create([
            'name'        => 'Restourant',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Tag::create([
            'name'        => 'Parking',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]); 
    }
}
