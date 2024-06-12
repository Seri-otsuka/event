<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //DM表示一覧のメソッド
    public function room(Room $room, User $user)
    {
        
        return view('room.index')->with([
            'users' => $user,
            'rooms' => $room->getPaginateByLimit(20)]);
    }
    //DM表示ページ
    public function show(Room $room)
    {
        return view('room.index')->with([
            'room' => $room,]);
    }
    //DMボックス作成のメソッド
    public function store(Room $room, RoomRequest $request, Article $article)
    {
        $input = $request['room'];
        $room = new Room();
        $room->user1_id = \Auth::id();
        $room->user2_id = $article->user_id;
        $article->fill($input)->save();
        
         return redirect('/users/{user}',$article);
    }
    
    
}
