<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $a1 = new animal;

        $a1 -> name = "Cat";
        $a1 -> age = 2;
        $a1 -> weight = 3.2;
        $a1 -> save();
    }
}
