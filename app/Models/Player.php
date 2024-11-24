<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function pitch()
    {
        return $this->hasOne(Pitch::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function umpires()
    {
        return $this->belongsToMany(Umpire::class);
    }

}
