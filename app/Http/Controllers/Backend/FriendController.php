<?php

namespace App\Http\Controllers\Backend;

use App\Events\MessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\Models\UserChats;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function connectedUser()
    {
        return Helpers::Response(['data']);
    }

    public function sendMessage(Request $request, $id)
    {

        event(new MessageEvent(22, $request->message, Auth::user()->id));
        return Helpers::Response(['data' => $request->all()]);
    }

    public function fetchMessage($idChannel)
    {
        $data = UserChats::where('channel_id', $idChannel)
                ->get();
        
        return Helpers::Response(['message' => $data]);
    }
}
