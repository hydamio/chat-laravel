@extends('layouts.room-default')

@section('title', 'Room Create')

@section('content')
<a class="header-item" href="{{ url('/') }}">Back</a>
<h1>NewRoom!</h1>
<form class="room-create-form" action="{{ url('/rooms') }}" method="post">
  {{ csrf_field() }}
  <p>
    <input class="input-parts" type="text" name="name" placeholder="enter new room name" value="{{ old('name') }}">
    @if($errors->has('name'))
    <span class="error">{{ $errors->first('name') }}</span>
    @endif
  </p>
  <p>
    <input class="input-parts" type="submit" value="Add">
  </p>
</form>
@endsection
