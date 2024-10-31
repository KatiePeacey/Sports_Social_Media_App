<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Club;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pitch>
 */
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
            'club_id' => Club::factory()->create()->id,
        ];
    }
}
