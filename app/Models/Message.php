<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Message extends Model
{
    use HasFactory;
    protected $fillable=[
        'sender_id',
        'receiver_id',
        'message',
    ];


    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
    public function reciver(){
        return $this->belongsTo(User::class,'reciver_id');
    }
}
