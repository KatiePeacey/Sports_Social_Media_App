<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            //
            
            'name' => fake() -> city(),
            'teams' => fake() -> numberBetween(1, 10),
            'members' => fake() -> numberBetween(10, 100),
            'pitch_location' => fake() -> streetName(),
        ];
    }
}
