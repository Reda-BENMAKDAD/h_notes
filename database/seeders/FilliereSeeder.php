<?php

namespace Database\Seeders;

use App\Models\Filliere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filliere::factory()->count(5)->create();
    }
}
