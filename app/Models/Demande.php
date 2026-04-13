<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Demande extends Model
{
    use HasFactory;
    protected $fillable=[
        'sender_id',
        'receiver_id',
        'offer_id',
    ];
    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
    public function receiver(){
        return $this->belongsTo(User::class,'receiver_id');
    }
    public function offer(){
        return $this->belongsTo(Offer::class,'offer_id');
    }
}
