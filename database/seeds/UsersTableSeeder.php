<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Madysan Ya',
            'email' => 'madysanya@gmail.com',
            'password' => bcrypt('madysanya'),
        ]);
    }
}
