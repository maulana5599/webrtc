<?php

namespace App\Http\Controllers\Backend;

use App\Events\MessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\Models\User;
use App\Models\UserChannel;
use App\Models\UserChats;
use App\Models\UserFriend;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function connectedUser($id)
    {
        $friend = UserFriend::with('FriendUser')
        ->where('user_id', $id)
        ->select('user_id', 'friend_id')
        ->get();

        $data = [
            'friend' => $friend
        ];
        return Helpers::Response($data);
    }

    public function sendMessage(Request $request, $id)
    {
        event(new MessageEvent($id, $request->message, Auth::user()->id));
        return Helpers::Response(['data' => $request->channel]);
    }

    public function fetchMessage($idChannel)
    {
        $data = UserChats::where('channel_id', $idChannel)
                ->get();
        
        return Helpers::Response(['message' => $data]);
    }

    public function joinChat(Request $request, $id)
    {
        $options = [
            'nomer_pendaftar' => Auth::user()->nomer_handphone,
            'nomer_didaftarkan' => $request->user_number,
            'verifikasi' => Helpers::IS_VERIFIKASI
        ];
         
        $channel = UserChannel::where([
            'nomer_pendaftar' => Auth::user()->nomer_handphone,
            'nomer_didaftarkan' => $request->user_number,
            'verifikasi' => Helpers::IS_VERIFIKASI
        ])->first();

        if (empty($channel)) {
            return response()->json([
                'status' => 'Anda belum mempunyai akses untuk menghubungi kontak ini'
            ], 500);
        }
        
        $idChannel = $channel->channel;
        $user = User::where(
            ['id' => $id]
        )->first();
    
        $view = view('pages.chatbody', compact('user', 'idChannel'))->render();  
        return Helpers::Response($view);
    }

}
