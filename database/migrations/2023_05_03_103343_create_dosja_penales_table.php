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
        Schema::create('dosja_penales', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('baza_ligjore')->nullable();
            $table->string('veprime_ne_polici')->nullable();
            $table->string('komisariati')->nullable();
            $table->string('prokuror')->nullable();
            $table->string('file')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('klient_id')->constrained('klients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosja_penales');
    }
};
