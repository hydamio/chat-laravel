<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'body'];

    //$comment->roomとアクセスできるように
    public function room() {
      return $this->belongsTo('App\Room');
    }

    //$comment->userとアクセスできるように
    public function user() {
      return $this->belongsTo('App\User');
    }
}
