<?php

use App\Feature;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'name'        => 'Elevator in building',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Air Conditioned',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Outdoor Seating',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Free Wi Fi',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Online Ordering',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Wheelchair Friendly',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Free Parking',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);

        Feature::create([
            'name'        => 'Pet Friendly',
            'description' => 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla.',
        ]);
    }
}
