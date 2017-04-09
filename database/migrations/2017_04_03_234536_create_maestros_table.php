<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id_maestro');
            $table->string("nombre",50);
            $table->string("apellido_paterno",50);
            $table->string("apellido_materno",50);
            $table->string("foto",70);
            $table->string("numero_telefono",15);
            $table->string("numero_celular",15);
            $table->string("correo",50);
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
        Schema::dropIfExists('maestros');
    }
}
