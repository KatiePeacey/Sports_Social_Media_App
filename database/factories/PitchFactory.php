<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pitch>
 */tting up a one to one relation
class PitchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'city' => fake()->city(),
            'streetAddress' => fake()->streetAddress(),
            'postcode' => fake()->postcode(),
            'club_id' => ,
        ];
    }
}
