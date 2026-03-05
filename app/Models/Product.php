<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    protected $fillable=[
        'name',
        'price',
        'description'
    ];

            public function order()
    {
        return $this->hasMany(Order::class);
    }
}
