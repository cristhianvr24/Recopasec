<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->bigInteger('cedula')->unsigned()->unique();
            $table->string('nombre_1', 25);
            $table->string('nombre_2', 25)->nullable();
            $table->string('apellido_1', 25);
            $table->string('apellido_2', 25)->nullable();
            $table->string('telefono', 12);
            $table->string('direccion', 100);
            $table->string('correo')->unique();      
              
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
        Schema::dropIfExists('estudiante');
    }
}