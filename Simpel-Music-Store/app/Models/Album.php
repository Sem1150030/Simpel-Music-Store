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

    public function artist(){
        return $this->belongsTo(Artist::class);
    }
}
