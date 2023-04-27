<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupes;
use App\Models\Module;
use App\Models\Prof;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seance>
 */
class SeanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(4),
            'date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['présentieòle', 'distancielle']),
            'idModule' => $this->faker->randomElement(Module::pluck('id')),
            'idGroupe' => $this->faker->randomElement(Groupes::pluck('id')),
            'idProf' => $this->faker->randomElement(Prof::pluck('id')),
        ];
    }
}
