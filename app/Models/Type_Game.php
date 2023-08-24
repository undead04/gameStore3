<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Game extends Model
{
    use HasFactory;
    public function type_games()
    {
        return $this->belongsTo(PGameost::class, 'gameID');
    }
}
