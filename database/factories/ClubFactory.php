<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Pitch;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->city(),
            'league' => fake()->randomElement(['prem1', 'prem2', 'div1', 'div2', 'div3', 'div4', 'div5']),
            'games_played' => fake()->numberBetween($min = 1, $max = 100),
            'pitch_id' => Pitch::factory(),
        ];
    }
}
