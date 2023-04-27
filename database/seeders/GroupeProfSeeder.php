<?php

namespace Database\Seeders;

use App\Models\GroupeProf;
use App\Models\Groupes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupeProfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupeProf::factory()->count(10)->create();
    }
}
