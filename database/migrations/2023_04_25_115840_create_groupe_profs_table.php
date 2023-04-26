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
        Schema::create('groupe_profs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idProf');
            $table->foreign('idProf')->references('id')->on('profs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('idGroupe');
            $table->foreign('idGroupe')->references('id')->on('groupes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_profs');
    }
};
