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
        Schema::create('book_category', function (Blueprint $table) {
            $table->id()->unsigned()->comment('Identificador único del registro');
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade')->comment('Identificador del libro, clave foránea a la tabla books');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->comment('Identificador de la categoría, clave foránea a la tabla categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};
