<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_class',
        'health',
        'weapon',
    ];

    public $timestamps = false;

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
