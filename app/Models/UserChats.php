<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChats extends Model
{
    use HasFactory;

    protected $table = 'user_chats';

    protected $fillable = ['user_id', 'channel_id', 'message', 'read_message', 'friend_id'];
}
