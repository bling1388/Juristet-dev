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
        Schema::create('takimes', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('koment')->nullable();
            $table->string('tipi')->nullable();
            $table->foreignId('dosja_penale_id')->constrained('dosja_penales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takimes');
    }
};
