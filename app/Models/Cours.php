<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cours extends Model
{
    use HasFactory;
 protected $fillable=[
    'user_id',
    'Title',
    'Article',
    'url',
    'category_id'
 ];
   public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
 }

