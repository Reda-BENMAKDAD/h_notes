<?php

namespace Database\Factories;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupes;
use App\Models\Module;
use App\Models\Prof;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seance>
 */
class SeanceFactory extends Factory
{
    protected $model = Seance::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(4),
            'date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['présentieòle', 'distancielle']),
            'idModule' => $this->faker->randomElement(Module::pluck('id')),
            'idGroupe' => $this->faker->randomElement(Groupes::pluck('id')),
            'idProf' => $this->faker->randomElement(Prof::pluck('id')),
        ];
    }
}

