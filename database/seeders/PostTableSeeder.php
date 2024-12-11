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
        $p->caption = 'test test test';
        $p->image_path = '071338d77a1599bc2cbf701843a818c5.png';
        $p->player_id = 1;
        $p->save();

        Post::factory(3)->create();
    }
}