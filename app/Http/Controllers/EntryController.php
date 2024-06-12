<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\User;
use App\Models\Room;

class EntryController extends Controller
{
    public function entry(Entry $entry)
    {
        $users = User::get(); 
        $room = Room::get(); 
          return view('messages.entry')->with([
            'users' => $users,
            'room' => $room]);
    }
}
