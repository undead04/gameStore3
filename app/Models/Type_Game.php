<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Game extends Model
{
    use HasFactory;
    protected $table = 'types';
    public function getTypeId()
    {
        return $this->attributes['id'];
    }
    public function setTypeId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getTypeGame()
    {
        return $this->attributes['typeNames'];
    }
    public function setTypeGame($typeGame)
    {
        $this->attributes['typeNames'] = $typeGame;
    }

    public function typeGame()
    {
        return $this->hasMany(typeGame::class, 'typeId');
    }
}
