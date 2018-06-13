<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Comment;

class CommentsController extends Controller
{

  public function store(Request $request, Room $room) {
    $this->validate($request, [
      'body' => 'required'
    ]);

    $comment = new Comment(['body' => $request->body, 'user_id' => 1]);
    $room->comments()->save($comment);

    return redirect()->action('RoomsController@room', $room);
  }

}
