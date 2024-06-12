<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'user1_id',
        'user2_id',
    ];
    
    //記事に対して
     public function users()
    {
        return $this->hasMany(User::class);
    }
    
    //記事に対して
     public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
