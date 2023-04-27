<?php

namespace Database\Seeders;

use App\Models\GroupeProf;
use App\Models\Groupes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupeProfSeeder extends Seeder
{
    public function run()
    {
        GroupeProf::factory()->count(10)->create();
    }
}
