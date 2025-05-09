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
        Schema::create('respostes', function (Blueprint $table) {
            $table->id('id_resposta');
            $table->foreignId('id_dubte')->constrained('dubtes', 'id_dubte');
            $table->string('username');
            $table->text('txt_resposta');
            $table->string('arxiu_resposta')->nullable();
            $table->foreignId('id_usuari')->constrained('users', 'id_usuari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostes');
    }
};

