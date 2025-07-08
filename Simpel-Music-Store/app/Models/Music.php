<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Music extends Model
{
    use HasFactory;

    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

}
