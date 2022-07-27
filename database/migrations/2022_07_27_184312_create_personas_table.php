<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            /* $table->timestamps(); */
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');

            $table->foreignId('id_tipoUsuario')->constrained('tipo_usuarios');
            $table->foreignId('id_especialidad')->constrained('especialidads')->nullable();
            $table->foreignId('id_sintoma')->constrained('sintomas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
