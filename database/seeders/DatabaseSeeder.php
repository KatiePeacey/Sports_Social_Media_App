<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PlayerTableSeeder::class);
        $this->call(PitchTableSeeder::class);
        $this->call(UmpireTableSeeder::class);
        $this->call(ClubTableSeeder::class);
        $this->call(PostTableSeeder::class);
        
    }
}
