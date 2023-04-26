<?php

namespace Database\Factories;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeanceFactory extends Factory
{
    protected $model = Seance::class;

    public function definition()
    {
        return [
            'idModule' => \App\Models\Module::inRandomOrder()->first()->id,
            'idProf' => \App\Models\Prof::inRandomOrder()->first()->id,
            'date' => $this->faker->dateTime(),
            'salle' => $this->faker->word(),        ];
    }
}

