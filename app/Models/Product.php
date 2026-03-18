<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;
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
