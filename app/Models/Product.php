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
        'user_id',
        'price',
        'status',
        'description',
        'category_id',
        'order_id',
        'photo',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
