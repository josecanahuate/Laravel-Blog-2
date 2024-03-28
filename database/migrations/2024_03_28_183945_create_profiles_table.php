<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);

            $table->unsignedBigInteger('user_id')->unique(); //
            $table->foreign('user_id')->references('id')->on('users') //llave foranea que relacione id de la tabla users con esta tabla
            ->onDelete('cascade') //permite eliminar todos los campos relacionados con este usuario
            ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
