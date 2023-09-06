<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    public function getGameId()
    {
        return  $this->attributes['id'];
    }
    public function setGameId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getNameGame()
    {
        return  $this->attributes['name_Game'];
    }
    public function SetNameGame($name)
    {
        $this->attributes['name_Game'] = $name;
    }
    public function getDeveloperId()
    {
        return $this->attributes['developerId'];
    }
    public function setDeveloperId($developer)
    {
        $this->attributes['developerId'] = $developer;
    }
    public function getPublisher()
    {
        return $this->attributes['publisher'];
    }
    public function setPublisher($publisher)
    {
        $this->attributes['publisher'] = $publisher;
    }
    public function getGenre()
    {
        return $this->attributes['genre'];
    }
    public function setGenre($genre)
    {
        $this->attributes['genre'] = $genre;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    public function getIamge()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }
    public function getCreateAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreateAt($createAt)
    {
        $this->attributes['created_at'] = $createAt;
    }
    public function getUpdateAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdateAt($updateAt)
    {
        $this->attributes['updated_at'] = $updateAt;
    }
    public function typeGame()
    {
        return $this->hasMany(TypeGame::class, 'gameId');
    }
    public function orderGame()
    {
        return $this->hasMany(Game_Order::class);
    }
    public function developer()
    {
        return $this->belongsTo(Developer::class, 'developerId');
    }
}
