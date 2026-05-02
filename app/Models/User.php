<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// ✅ Add all missing imports
use App\Models\Cours;
use App\Models\Post;
use App\Models\Order;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Message;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'google_id',
        'role_id',
        'email',
        'status',
        'condition',
        'password',
        'phone_number',
        'profile_photo',
        'biographie',
        'localisation',
        'isOnline',
        'solde',
        'avatar',     
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    public function cours()
         {
         return $this->hasMany(Cours::class);
         }
    public function posts()
         {
         return $this->hasMany(Post::class);
          }
    public function orders()
        {
         return $this->hasMany(Order::class);
          }
    public function offers()
         {
         return $this->hasMany(Offer::class);
         }
    public function products()  {
         return $this->hasMany(Product::class);
         }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
