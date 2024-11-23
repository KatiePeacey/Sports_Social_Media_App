<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Umpire;
use App\Models\Pitch;
use App\Models\Post;

class ClubTableSeeder extends Seeder
{
    public function run(): void
    {
        $c = new Club;
        $c->name = 'Gowerton';
        $c->teams = 2;
        $c->established = 1972;
        $c->save();

        Club::factory()
        ->count(10) 
        ->has(Umpire::factory()->count(3)) // Links 3 umpires for each club
        ->has(
            Post::factory()
                ->count(5) // Creates 30 players for each club
                //->has(Post::factory()->count(2)) // Creates 10 posts for each player
        )
        ->has(Pitch::factory()) // Every club has a pitch
        ->create();


    }
}

