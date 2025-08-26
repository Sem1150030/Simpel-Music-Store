<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = ['user_id', 'Subtotal', 'Tax', 'shippingCost'];

    public function albums(){
        return $this->belongsToMany(Album::class, 'order_album')->withPivot('quantity');
    }
}
