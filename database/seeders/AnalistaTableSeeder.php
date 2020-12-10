<?php

namespace Database\Seeders;

use App\Models\Analista;
use Illuminate\Database\Seeder;

class AnalistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Analista::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Analista::create([
                'nombre' => $faker->name,
            ]);
        }
    }
}
