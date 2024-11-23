<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Player;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = new Post;
        $p->content = 'ff26dafdc42c7084cf3ad58200673783.png';
        $p->player_id = 1;
        $p->save();

        // Post::factory()
        // ->count(10) //Creates 10 clubs
        // ->create();
    }
}
