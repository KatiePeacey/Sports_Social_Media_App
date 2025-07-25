<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'league',
        'games_played',
        'pitch_id',
    ];

    public function pitches()
    {
        return $this->hasOne(Pitches::class);
    }
}
