<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    use HasFactory;

    public function musics(){
        return $this->hasMany(Music::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_album')->withPivot('quantity');
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function reviews(){
        return $this->morphMany(Review::class, 'reviewable');
    }



}
