<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function getOrderId()
    {
        return $this->attributes['id'];
    }
    public function setOrderId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getTotal()
    {
        return $this->attributes['total'];
    }
    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }
    public function getUserId()
    {
        return $this->attributes['userId'];
    }
    public function setUserId($userId)
    {
        $this->attributes['userId'] = $userId;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($users)
    {
        $this->user = $users;
    }
    public function gameOrder()
    {
        return $this->hasMany(Game_Order::class);
    }
    public function getGameOrder()
    {
        return $this->gameOrder;
    }
    public function setGameOrder($gameOrder)
    {
        $this->gameOrder = $gameOrder;
    }
}
