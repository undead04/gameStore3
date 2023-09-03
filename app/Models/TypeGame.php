<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeGame extends Model
{
    use HasFactory;
    public function getGameId()
    {
        return $this->attributes['gameId'];
    }
    public function setGameId($gameId)
    {
        return $this->attributes['gameId'] = $gameId;
    }
    public function getTypeId()
    {
        return $this->attributes['typeId'];
    }
    public function setTypeId($typeId)
    {
        return $this->attributes['typeId'] = $typeId;
    }
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function type()
    {
        return $this->belongsTo(Type_Game::class, 'typeId');
    }
}
