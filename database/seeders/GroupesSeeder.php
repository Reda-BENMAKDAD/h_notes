<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groupes;

class GroupesSeeder extends Seeder
{
    public function run()
    {
        Groupes::factory(10)->create();
    }
}
