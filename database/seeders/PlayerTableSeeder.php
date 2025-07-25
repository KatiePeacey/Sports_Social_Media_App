<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use App\Models\Umpire;
use App\Models\Pitch;
use App\Models\User;

class PlayerTableSeeder extends Seeder
{
    public function run(): void
    {
        // $c = new Player;
        // $c->name = 'John Jones';
        // $c->date_of_birth = '18-08-1999';
        // $c->email = 'johnjones@gmail.com';
        // $c->phone_number = '+7734539324';
        // $c->postcode = 'SA2 8WS';
        // $c->user_id = '100';
        // $c->save();

       User::factory(10)->create();
       Player::factory(10)->create();
    }
}

