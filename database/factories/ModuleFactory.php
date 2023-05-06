<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Filliere;
use App\Models\Prof;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'masseHorraire' => $this->faker->numberBetween(50, 150),
            'idFilliere' => $this->faker->randomElement(Filliere::pluck('id')),
            'idProf' => $this->faker->randomElement(Prof::pluck('id')),


        ];
    }
}
