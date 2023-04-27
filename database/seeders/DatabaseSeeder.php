<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\GroupeProf;
use App\Models\Stagieres;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FilliereSeeder::class,
            ProfSeeder::class,
            GroupeSeeder::class,
            GroupeProfSeeder::class,
            ModuleSeeder::class,
            ExamSeeder::class,
            StagieresSeeder::class,
            NoteSeeder::class,
            SeanceSeeder::class,
        ]);
    }
}
