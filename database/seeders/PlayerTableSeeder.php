<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use App\Models\Umpire;
use App\Models\Pitch;
use App\Models\Post;

class PlayerTableSeeder extends Seeder
{
    public function run(): void
    {
        $c = new Player;
        $c->name = 'John Jones';
        $c->date_of_birth = '18-08-1999';
        $c->email = 'johnjones@gmail.com';
        $c->phone_number = '+7734539324';
        $c->postcode = 'SA2 8WS';
        $c->save();

        // Player::factory()
        // ->count(10) 
        // ->has(Umpire::factory()->count(3)) // Links 3 umpires for each club
        // ->has(Post::factory()->count(2))
        // ->has(Pitch::factory()) // Every club has a pitch
        // ->create();

       Player::factory(10)->create();
    }
}

