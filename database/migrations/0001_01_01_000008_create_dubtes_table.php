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
        Schema::create('dubtes', function (Blueprint $table) {
            $table->id('id_dubte');
            $table->string('username');
            $table->string('titol_dubte');
            $table->text('txt_dubte');
            $table->string('arxiu_dubte')->nullable();
            $table->foreignId('id_usuari')->constrained('users', 'id_usuari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dubtes');
    }
};

