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
            'idFilliere' => DB::table('filieres')->inRandomOrder()->first()->id,
            'idProfs' => DB::table('profs')->inRandomOrder()->first()->id,
            'nom' => $this->faker->word(),
            'masseHorraire' => $this->faker->numberBetween(10, 50),
        ];
    }
}