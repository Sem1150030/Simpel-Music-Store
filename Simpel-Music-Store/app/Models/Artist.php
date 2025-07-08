<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
       use HasFactory;

       public function musics(){
        return $this->hasMany(Music::class);
       }

       public function albums(){
        return $this->hasMany(Album::class);
       }

}
