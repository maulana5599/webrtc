<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    use HasFactory;

    protected $table = 'table_friends';

    protected $fillable = [
        'user_id',
        'friend_id',
        'verifikasi',
        'is_deleted'
    ];

    public function FriendUser()
    {
        return $this->hasOne(User::class, 'id', 'friend_id');
    }
}
