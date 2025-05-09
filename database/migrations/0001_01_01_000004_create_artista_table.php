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
        Schema::create('artista', function (Blueprint $table) {
            $table->id('id_artista');
            $table->string('nom_artista', 100);
            $table->integer('n_cancons')->default(0);
            $table->string('imatge_artista');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artista');
    }
};
