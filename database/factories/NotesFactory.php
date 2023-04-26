<?php

namespace Database\Factories;

use App\Models\Notes;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotesFactory extends Factory
{
    protected $model = Notes::class;

    public function definition()
    {
        return [
            'valeur' => $this->faker->numberBetween(0, 20),
            'idstagiere' => \App\Models\Stagieres::inRandomOrder()->first()->id,
            'idexam' => \App\Models\Exam::inRandomOrder()->first()->id,
        ];
    }
}
