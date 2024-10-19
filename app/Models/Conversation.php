<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id_1',
        'user_id_2',
        'last_message_id'
    ];

    public function lastMessage(){
        return $this->belongsTo(Message::class, 'last_message_id');
    }

    public function user_1(){
        return $this->belongsTo(User::class, 'user_id_1');
    }

    public function user_2(){
        return $this->belongsTo(User::class, 'user_id_2');
    }
}
