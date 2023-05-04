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
        Schema::create('nenes', function (Blueprint $table) {
            $table->id();
            $table->string('emri')->nullable();
            $table->string('titulli')->nullable();
            $table->string('pershkrimi')->nullable();
            $table->date('publikimi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nenes');
    }
};
