<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index()->nullable();
            $table->string('name');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('rut');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email');
            $table->string('direccion');
            
            $table->string('universidad');
            $table->string('carrera');
            $table->string('egreso');
            $table->string('departamento');
            $table->string('facultad');

            $table->string('empresa');
            $table->string('cargo');
            $table->string('pago');
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
        Schema::dropIfExists('formularios');
    }
}
