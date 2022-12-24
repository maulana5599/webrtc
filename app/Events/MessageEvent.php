<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $idChannel;
    private $message;
    private $userid;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($idChannel, $message, $userid)
    {
        $this->idChannel = $idChannel;
        $this->message = $message;
        $this->userid = $userid;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $channel = 'message-'. $this->idChannel;
        return new Channel($channel);
    }

    public function broadcastAs()
    {
        return "MessagePrivate";
    }

    public function broadcastWith() 
    {
        return [
            "user_id" => $this->userid,
            "message" => $this->message
        ];
    }
}
