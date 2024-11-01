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
        $u->clubs()->attach(1);
        $u->clubs()->attach(9);

       // Umpire::factory()->count(20)->create();

    }
}
