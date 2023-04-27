<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Filliere;
use App\Models\Prof;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'masseHorraire' => $this->faker->numberBetween(50, 150),
            'idFilliere' => $this->faker->randomElement(Filliere::pluck('id')),
            'idProf' => $this->faker->randomElement(Prof::pluck('id')),


        ];
    }
}
