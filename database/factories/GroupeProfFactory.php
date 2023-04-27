<?php

namespace Database\Factories;

use App\Models\GroupeProf;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupes;
use App\Models\Prof;

class GroupeProfFactory extends Factory
{
    protected $model = GroupeProf::class;

    public function definition()
    {
        return [
                
                'idGroupe' => $this->faker->randomElement(Groupes::pluck('id')),
                'idProf' => $this->faker->randomElement(Prof::pluck('id')),
        ];
    }
}
