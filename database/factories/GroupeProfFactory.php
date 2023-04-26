<?php

namespace Database\Factories;

use App\Models\GroupeProf;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupeProfFactory extends Factory
{
    protected $model = GroupeProf::class;

    public function definition()
    {
        return [
            'idProf' => $this->faker->numberBetween(1, 10),
            'idGroupe' => $this->faker->numberBetween(1, 20)
        ];
    }
}
