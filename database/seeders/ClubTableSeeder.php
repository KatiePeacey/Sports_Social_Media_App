<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Umpire;
use App\Models\Player;
use App\Models\Pitch;

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
        ->count(10) //Creates 10 clubs
        ->has(Umpire::factory()->count(3)) //Links 3 umpires for each club
        ->has(Player::factory()->count(30)) //Links 30 players for each club
        ->has(Pitch::factory()) //Every club has a pitch
        ->create();

    }
}

