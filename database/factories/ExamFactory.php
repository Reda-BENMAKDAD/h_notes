<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Module;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['control 1', 'control 2', 'EFM', 'EFM régional']),
            'idModule' => $this->faker->randomElement(Module::pluck('id')),
            'libelle' => $this->faker->sentence(3),

        ];
    }
}
