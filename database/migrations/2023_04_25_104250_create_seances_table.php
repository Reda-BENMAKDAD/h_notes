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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->text("description");
            $table->date("date");
            $table->string("nom");
            $table->string("type");
            $table->foreignId("idProf")->nullable();
            $table->foreign("idProf")->references("id")->on("profs")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("idModule");
            $table->foreign("idModule")->references("id")->on("modules")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("idGroupe");
            $table->foreign("idGroupe")->references("id")->on("groupes")->onDelete("cascade")->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
