<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    protected $model = Exam::class;

    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['controle 1', 'controle 2 ', 'EFM']),
            'idModule' => $this->faker->numberBetween(1, 5),
            'libelle' => $this->faker->word(),
        ];
    }
}
