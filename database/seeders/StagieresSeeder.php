<?php

namespace Database\Seeders;

use App\Models\Stagieres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stagieres::factory()->count(500)->create();
    }
}
