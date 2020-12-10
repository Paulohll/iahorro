<?php

namespace Database\Seeders;

use App\Models\Analista;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnalistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Analista::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        //

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Analista::create([
                'nombre' => $faker->name,
            ]);
        }
    }
}
