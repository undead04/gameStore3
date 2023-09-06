<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    public function getDeveloperId()
    {
        return $this->attributes['id'];
    }
    public function setDeveloperId($developerId)
    {
        $this->attributes['id'] = $developerId;
    }
    public function getDeveloperName()
    {
        return $this->attributes['developerName'];
    }
    public function setDeveloperName($developerName)
    {
        $this->attributes['developerName'] = $developerName;
    }
    public function getDeveloperImage()
    {
        return $this->attributes['developerImage'];
    }
    public function setDeveloperImage($developerImage)
    {
        $this->attributes['developerImage'] = $developerImage;
    }
    public function game()
    {
        return $this->belongsTo(Game::class, 'developerId');
    }
}
