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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id()->unsigned()->comment('Identificador único de la tarea');
            $table->string('title', 255)->comment('Título de la tarea, obligatorio y máximo 255 caracteres');
            $table->text('description')->nullable()->comment('Descripción detallada de la tarea, opcional');
            $table->boolean('status')->comment('Estado de la tarea: true (completada) o false (pendiente)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
