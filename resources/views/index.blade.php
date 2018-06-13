@extends('layouts.default')

@section('title', 'Chat!')

@if (Route::has('login'))
    <div class="top-right links">
        @auth
          @section('content')
          <a class="header-item" href="{{ url('/room/create') }}">New Room</a>
          <h1>Chat!</h1>
          <ul class="rooms">
            @forelse($rooms as $room)
            <li class="room">
              <a href="{{ action('RoomsController@room', $room) }}">{{ $room->name }}</a>
              <a href="#" class="del" data-id="{{ $room->id }}">[x]</a>
              <form action="{{ url('/rooms', $room->id) }}" method="post" id="form_{{ $room->id }}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
              </form>
            </li>
            @empty
            <li>No Room yet!</li>
            @endforelse
          </ul>
          @endsection
        @else
          <?php header('Location:/login') ?>
        @endauth
    </div>
@endif
