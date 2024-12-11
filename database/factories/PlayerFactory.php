<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use App\Models\Club;
use App\Models\Player;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'date_of_birth' => fake()->date($format = 'd-m-Y', $max = now()->subYears(13)),
            'email' => fake()->email(),
            'phone_number' => fake()->e164PhoneNumber(),
            'postcode' => fake()->postcode(),
            'user_id' => User::factory(),
        ];
    } 
}

