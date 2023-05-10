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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("type");
            $table->foreignId("idModule");
            $table->foreign("idModule")->references("id")->on("modules")->onDelete("cascade")->onUpdate("cascade");
            $table->string("libelle");
            $table->foreignId('profId')->nullable();
            $table->foreign('profId')->references("id")->on('profs')->onDelete("cascade")->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
