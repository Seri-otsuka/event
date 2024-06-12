<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\MessageSent;

class Message extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'user_id',
        'room_id',
        'message',
    ];

    //記事に対して
      public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //記事に対して
     public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
