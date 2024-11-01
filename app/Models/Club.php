<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function pitch()
    {
        return $this->hasOne(Pitch::class);
    }
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function umpires()
    {
        return $this->belongsToMany(Umpire::class);
    }

}
