<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        return [
            'idFilliere' => DB::table('filieres')->inRandomOrder(),
            'idProfs' => DB::table('profs')->inRandomOrder(),
            'nom' => $this->faker->word(),
            'masseHorraire' => $this->faker->numberBetween(10, 50),
        ];
    }
}
