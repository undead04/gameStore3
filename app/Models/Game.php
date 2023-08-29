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
    public function getDeveloper()
    {
        return $this->attributes['developer'];
    }
    public function setDeveloper($developer)
    {
        $this->attributes['developer'] = $developer;
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
        return $this->attributes['type_game'];
    }
    public function setGenre($genre)
    {
        $this->attributes['type_game'] = $genre;
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
    public function typeGame()
    {
        return $this->hasMany(Type_Game::class);
    }
    public function getTypeGames()
    {
        return $this->typeGame;
    }
    public function setTypeGames($typeGame)
    {
        $this->typeGame = $typeGame;
    }
    public function orderGame()
    {
        return $this->hasMany(Game_Order::class);
    }
}
