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
        Schema::create('canco', function (Blueprint $table) {
            $table->id('id_canco');
            $table->string('nom_canco', 100);
            $table->text('lletra_canco');
            $table->string('link_spotify')->default('#');
            $table->string('link_youtube')->default('#');
            $table->string('link_apple')->default('#');
            $table->string('link_amazon')->default('#');            
            $table->foreignId('id_artista')->constrained('artista', 'id_artista');
            $table->foreignId('id_genere')->constrained('genere', 'id_genere');
            $table->foreignId('id_usuari')->constrained('users', 'id_usuari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canco');
    }
};

