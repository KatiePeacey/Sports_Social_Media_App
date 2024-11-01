<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Umpire;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c = new Club;
        $c->name = 'Gowerton';
        $c->teams = 2;
        $c->members = 150;
        $c->save();

       // Club::factory()->count(10)->create();

        Club::factory()
        ->has(Umpire::factory()->count(3)) // Creates and links 3 umpires per club
        ->count(5) // Creates 5 clubs
        ->create();
}
}