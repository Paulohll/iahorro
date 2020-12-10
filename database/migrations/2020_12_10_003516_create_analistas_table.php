<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analistas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::table('registros', function (Blueprint $table) {
            $table->foreign('analista_id')->references('id')->on('analistas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analistas');
    }
}
