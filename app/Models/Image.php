<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    use HasFactory;
    public function getGameId()
    {
        return $this->attributes['gameId'];
    }
    public function setGameId($imageId)
    {
        return $this->attributes['gameId'] = $imageId;
    }
    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        return $this->attributes['image'] = $image;
    }
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
