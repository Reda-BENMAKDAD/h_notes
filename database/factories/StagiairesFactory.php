<?php


namespace Database\Factories;

use App\Models\Stagieres;
use Illuminate\Database\Eloquent\Factories\Factory;

class StagieresFactory extends Factory
{
    protected $model = Stagieres::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->firstName,
            'prenom' => $this->faker->lastName,
            'idgroupe' => \App\Models\Groupes::inRandomOrder()->first()->id,
        ];
    }
}

