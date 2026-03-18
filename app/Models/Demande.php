<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Demande extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'description',
        'offer_id',
    ];
    public function sender(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function offer(){
        return $this->belongsTo(Offer::class,'offer_id');
    }
}
