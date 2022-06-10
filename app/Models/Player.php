<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_name',
        'player_faction',
        'player_type',
    ];

    public $timestamps = false;
    public function playerRole()
    {
        return $this->hasOne(PlayerRole::class);
    }
}
