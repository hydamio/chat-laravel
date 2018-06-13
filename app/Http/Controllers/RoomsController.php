<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Http\Requests\RoomRequest;

class RoomsController extends Controller
{
    public function index() {
      $rooms = Room::all();
      return view('index')->with('rooms', $rooms);
    }

    public function room(Room $room) {
      return view('room.room')->with('room', $room);
    }

    public function create() {
      return view('room.create');
    }

    public function store(RoomRequest $request) {
      $room = new Room();
      $room->name = $request->name;
      $room->save();
      return redirect('/');
    }

    public function destroy(Room $room) {
      $room->delete();
      return redirect('/');
    }
}
