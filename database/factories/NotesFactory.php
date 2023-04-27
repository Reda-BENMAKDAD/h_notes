<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stagieres;
use App\Models\Exam;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'valeur' => $this->faker->randomFloat(2, 0, 20),
            'idexam' => $this->faker->randomElement(Exam::pluck('id')),
            'idstagiere' => $this->faker->randomElement(Stagieres::pluck('id')),


        ];
    }
}
