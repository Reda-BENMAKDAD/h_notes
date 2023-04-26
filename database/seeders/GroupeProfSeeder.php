<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroupeProf;

class GroupeProfSeeder extends Seeder
{
    public function run()
    {
        GroupeProf::factory(10)->create();
    }
}
