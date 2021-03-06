<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turno');
            $table->boolean('disponibilidad');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('dni');
            $table->string('email');
            $table->boolean('notificacion_respondida')->default(0);
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('taller_id');
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
        Schema::dropIfExists('tecnicos');
    }
}
