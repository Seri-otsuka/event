<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\Room;
use App\Events\MessageSent;

class MessageController extends Controller
{
   public function store(Request $request,Room $room)
    {
        $input = $request['message'];
        $message = new Message();
        $message->user_id = \Auth::id();
        $message->room_id = $room->id;
        $message->message = $request->message;
        $message->save();
        return redirect()->route('message.index',$room);
    }
    
}
