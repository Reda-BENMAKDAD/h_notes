<?php

namespace Database\Factories;

use App\Models\Groupes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StagieresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                
                'nom' => $this->faker->lastName,
                'prenom' => $this->faker->firstName,
                'idGroupe' => $this->faker->randomElement(Groupes::pluck('id')),
        ];
    }
}
