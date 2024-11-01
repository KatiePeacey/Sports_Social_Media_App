<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pitch;

class PitchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $l = new Pitch;
        $l->city = 'Swansea';
        $l->streetAddress = 'Cwm Farm Lane';
        $l->postcode = 'SA2 9AU';
        $l->club_id = 1;
        $l->save();

        Pitch::factory()->count(10)->create();
    }
}
