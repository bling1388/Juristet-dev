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
        Schema::create('seancas', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('koment')->nullable();
            $table->string('pergatitje')->nullable();
            $table->string('trupa_gjykuese')->nullable();
            $table->foreignId('dosja_penale_id')->constrained('dosja_penales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seancas');
    }
};
