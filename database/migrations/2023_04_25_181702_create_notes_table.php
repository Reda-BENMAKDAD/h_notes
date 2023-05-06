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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->float('valeur');
            $table->foreignId('idexam');
            $table->foreignId('idstagiere');
            $table->foreignId('idProf')->nullable();
            $table->foreign('idProf')->references('id')->on('profs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idexam')->references('id')->on('exams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idstagiere')->references('id')->on('stagieres')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
