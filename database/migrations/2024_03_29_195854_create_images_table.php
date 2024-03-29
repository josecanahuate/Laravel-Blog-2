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
        Schema::create('images', function (Blueprint $table) {
            $table->string('url');

            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');

            //creando una llave primaria compuesta, para que no se puedan repetir las imágenes en la misma relación
            // Polymorphic relationship
            $table->primary(['imageable_id', 'imageable_type']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
