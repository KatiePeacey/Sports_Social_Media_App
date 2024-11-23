<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}