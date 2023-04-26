<?php

namespace Database\Seeders;

use App\Models\Prof;
use Illuminate\Database\Seeder;

class ProfSeeder extends Seeder
{
    public function run()
    {
        Prof::factory(10)->create();
    }
}
