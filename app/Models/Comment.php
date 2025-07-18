<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'post_id', 'player_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
