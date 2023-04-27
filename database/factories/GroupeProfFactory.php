<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupes;
use App\Models\Prof;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupeProf>
 */
class GroupeProfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                
                'idGroupe' => $this->faker->randomElement(Groupes::pluck('id')),
                'idProf' => $this->faker->randomElement(Prof::pluck('id')),
        ];
    }
}
