<?php

namespace Database\Factories;

use App\Models\Prof;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfFactory extends Factory
{
    protected $model = Prof::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName
        ];
    }
}
