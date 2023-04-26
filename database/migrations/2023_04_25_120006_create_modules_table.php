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
        Schema::create('module', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('masseHorraire');
            $table->timestamps();
            $table->foreignId('idFilliere');
            $table->foreignId('idProf');

            $table->foreignId('idFilliere')->references('id')->on('filieres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('idProf')->references('id')->on('Profs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
