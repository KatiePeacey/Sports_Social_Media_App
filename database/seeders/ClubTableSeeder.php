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
        $c1 = new Club;

        $c1 -> name = 'Abergavenny';
        $c1 -> teams = 1;
        $c1 -> members = 32;
        $c1 -> pitch_location = 'Crickhowell';
        $c1 -> save();
    }
}
