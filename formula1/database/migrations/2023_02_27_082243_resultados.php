<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('circuit_id')->unsigned();
            $table->bigInteger('numero_piloto')->unsigned();
            $table->foreign('circuit_id')->references('id')->on('circuitos')->onDelete('cascade');
            $table->foreign('numero_piloto')->references('id')->on('pilotos')->onDelete('cascade');
            $table->bigInteger('posicion')->unsigned();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('resultados');
    }
};
