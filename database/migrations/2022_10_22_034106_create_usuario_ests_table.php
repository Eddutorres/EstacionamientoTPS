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
        Schema::create('usuario_ests', function (Blueprint $table) {
            $table->id();
            $table->string('Rut');
            $table->string('Nombre1');
            $table->string('Nombre2');
            $table->string('ApPaterno');
            $table->string('ApMaterno');
            $table->string('Telefono');
            $table->string('Email');
            $table->string('Empresa');
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
        Schema::dropIfExists('usuario_ests');
    }
};
