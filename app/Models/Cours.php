<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
 protected $fillable=[
    'user_id',
    'Title',
    'Article',
 ];
   public function user()
    {
        return $this->belongsTo(User::class);
    }
 }

