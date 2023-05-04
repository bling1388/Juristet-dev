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
        Schema::create('masas', function (Blueprint $table) {
            $table->id();
            $table->string('kerkesa_prokurorise')->nullable();
            $table->string('kerkesa_mbrojtjes')->nullable();
            $table->date('vendimi_mases_date')->nullable();
            $table->string('vendimi_mases_file')->nullable();
            $table->string('ievp')->nullable();
            $table->string('ankimimi')->nullable();
            $table->string('file')->nullable();
            $table->date('data')->nullable();
            $table->string('trupa_gjykuese')->nullable();
            $table->string('vendimi_apel')->nullable();
            $table->date('zevendesimi_mases_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masas');
    }
};
