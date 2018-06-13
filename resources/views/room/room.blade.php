@extends('layouts.room-default')

@section('title', $room->name)

@section('content')
<a class="header-item" href="{{ url('/') }}">Back</a>
<form  action="{{ action('CommentsController@store', $room) }}" method="post">
  {{ csrf_field() }}
  <input class="header-item" type="submit" value="送信">
  <input class="header-item header-input-text" type="text" name="body" placeholder="enter your comment!">
  @if($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
  @endif
</form>
<h1>{{ $room->name }}</h1>
<ul class="comments">
  @forelse($room->comments as $comment)
  <li class="comment">{{ $comment->body }}</li>
  @empty
  <li class="comment">No Comment</li>
  @endforelse
</ul>
@endsection
