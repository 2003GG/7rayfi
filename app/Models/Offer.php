<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Offer extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'photo',
        'start_date',
        'end_date',
        'location',
        'description',


    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function demandes(){
        return $this->hasMany(Demande::class);
}
}
