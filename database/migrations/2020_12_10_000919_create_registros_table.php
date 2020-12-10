<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->double('ingresos',11, 2);
            $table->double('monto_solicitado',11, 2);
            $table->time('hora_inicial', $precision = 0);
            $table->time('hora_final', $precision = 0);
            $table->integer('analista_id')->unsigned();
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       

          DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    Schema::dropIfExists('registros');

    DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
