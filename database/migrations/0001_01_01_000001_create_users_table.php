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
        // Tabla de usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usuari');  // ID del usuario como PRIMARY KEY, con auto incremento
            $table->string('username', 50);  // Nombre de usuario con longitud máxima de 50 caracteres
            $table->string('email', 100)->unique();  // Correo electrónico único con longitud máxima de 100 caracteres
            $table->string('nom_usuari', 100);  // Nombre del usuario con longitud máxima de 100 caracteres
            $table->string('cognom_usuari', 100);  // Apellido del usuario con longitud máxima de 100 caracteres
            $table->string('password', 255);  // Contraseña, con longitud máxima de 255 caracteres
            $table->string('numero_tlf', 20)->nullable();  // Teléfono opcional con longitud máxima de 20 caracteres
            $table->foreignId('id_rol')->nullable()->constrained('rols', 'id_rol');  // Relación con el rol, puede ser NULL
            $table->rememberToken();  // Token para recordar la sesión
            $table->timestamps();  // Tiempos de creación y actualización
        });

        // Tabla para el reseteo de contraseñas
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();  // El correo será único
            $table->string('token');  // Token de reseteo de contraseña
            $table->timestamp('created_at')->nullable();  // Fecha de creación del token
        });

        // Tabla de sesiones (para almacenar la información de las sesiones de los usuarios)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();  // Identificador único de la sesión
            $table->foreignId('user_id')->nullable()->index();  // Relación con el usuario, puede ser NULL si no se asigna
            $table->string('ip_address', 45)->nullable();  // Dirección IP del usuario
            $table->text('user_agent')->nullable();  // Información del navegador del usuario
            $table->longText('payload');  // Datos de la sesión
            $table->integer('last_activity')->index();  // Última actividad de la sesión
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
