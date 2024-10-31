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
        //
        $c = new Club;
        $c->name = 'Gowerton';
        $c->teams = 2;
        $c->members = 150;
        $c->pitch_location = 'Gowerton';
        $c->save();
        
       Club::factory()->count(5)->create();
    }
}
