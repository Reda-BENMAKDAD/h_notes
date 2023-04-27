<?php

namespace Database\Factories;
use App\Models\Prof;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prof_modules>
 */
class prof_modulesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idProf' => $this->faker->randomElement(Prof::pluck('id')),
            'idModule' => $this->faker->randomElement(Module::pluck('id')),
        ];
    }
}
