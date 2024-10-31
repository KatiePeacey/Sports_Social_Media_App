<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Umpire;

class UmpireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $u = new Umpire;
        $u->name = 'George';
        $u->email = 'george@gmail.com';
        $u->postcode = 12332;
        $u->qualification_level = 1;
        $u->save();

        Umpire::factory()->count(10)->create();

    }
}
