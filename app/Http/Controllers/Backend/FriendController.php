<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function connectedUser()
    {
        return Helpers::Response(['data']);
    }
}
