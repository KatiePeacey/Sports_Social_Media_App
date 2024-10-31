<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $p = new Player;
        $p->name = 'Tom Jones';
        $p->age = 20;
        $p->save();

        Player::factory()->count(50)->create();

    }
}
