<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $l = new Club;
        $l->name = 'Swansea';
        $l->league = 'Prem1';
        $l->games_played = 50;
        $l->pitch_id = 1;
        $l->save();

        Club::factory(20)->create();
    }
}
