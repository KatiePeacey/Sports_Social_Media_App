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
        $u = new Umpire;
        $u->name = 'George';
        $u->email = 'george@gmail.com';
        $u->postcode = 12332;
        $u->qualification_level = 1;
        $u->save();
        $u->players()->attach(1);
        $u->players()->attach(9);

        Umpire::factory(10)->create();
    }
}
