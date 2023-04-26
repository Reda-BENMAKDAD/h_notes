<?php

namespace Database\Factories;

use App\Models\Groupes;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupesFactory extends Factory
{
    protected $model = Groupes::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'idFiliere' => rand(1,5)
        ];
    }
}
