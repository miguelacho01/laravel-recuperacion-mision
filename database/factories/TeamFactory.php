<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sport;
use App\Models\Trainer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' =>fake()->text(),
            'average'=>fake()->double(),
            'sport_id'=>Sport::all()->random()->id,
            'trainer_id'=>Trainer::all()->random()->id

        ];
    }
}
