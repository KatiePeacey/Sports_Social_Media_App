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
        $p->name = 'Katie Peacey';
        $p->club_id = 1;
        $p->save();

        //factory(App\Models\Player::class, 50)->create();
        Player::factory()->count(50)->create();
    }
}
