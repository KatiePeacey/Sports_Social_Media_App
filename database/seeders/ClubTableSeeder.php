<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Umpire;

class ClubTableSeeder extends Seeder
{
    public function run(): void
    {
        $c = new Club;
        $c->name = 'Gowerton';
        $c->teams = 2;
        $c->members = 150;
        $c->save();

        Club::factory()
        ->has(Umpire::factory()->count(3)) //Links 3 umpires for each club
        ->count(10) //Creates 10 clubs
        ->create();
    }
}