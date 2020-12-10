<?php

namespace Database\Seeders;

use App\Models\Registro;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RegistroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Registro::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $hora_ini= date('H:i:s', rand(28800, 57600));
            Registro::create([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'email' => $faker->email,
                'ingresos' => $faker->randomFloat(2, 500, 2500),
                'monto_solicitado' => $faker->numberBetween($min = 5000, $max = 10000) ,
                'hora_inicial' => $hora_ini,
                'hora_final' => date('H:i:s', strtotime($hora_ini)+rand(1, 8)*3600)
            ]);
        }
    }
}
