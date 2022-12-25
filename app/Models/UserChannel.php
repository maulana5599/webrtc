<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChannel extends Model
{
    use HasFactory;

    protected $table = 'table_channeluser';

    protected $fillable = [
        'nomer_pendaftar',
        'nomer_didaftarkan',
        'verifikasi',
        'channel'
    ];
}
