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
        Schema::create('klients', function (Blueprint $table) {
            $table->id();
            $table->string('emer')->nullable();
            $table->string('atesia')->nullable();
            $table->string('mbiemer')->nullable();
            $table->string('id_nr')->nullable();
            $table->boolean('i_denuar')->nullable();
            $table->string('statusi_civil')->nullable();
            $table->boolean('femije_te_mitur')->nullable();
            $table->string('personi_kontaktit')->nullable();
            $table->string('numri_kontaktit')->nullable();
            $table->string('arsimi')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klients');
    }
};
