<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id', 
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function umpires()
    {
        return $this->belongsToMany(Umpire::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
