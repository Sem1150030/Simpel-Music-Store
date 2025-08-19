<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function albums(){
        return $this->belongsToMany(Album::class)->withPivot('quantity');
    }
}
