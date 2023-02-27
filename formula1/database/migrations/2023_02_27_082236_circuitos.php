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
        Schema::create('circuitos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->engine = 'InnoDB';
            $table->string('nombre');
            $table->string('pais');
            $table->bigInteger('vueltas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('circuitos');

    }
};
