@extends('layouts.app')

@section('title', $team->title)

@section('content')
  <h4>{{ $team->name }}</h4>
  <p><strong>Email:</strong> <a href="mailto:{{ $team->email }}">{{ $team->email }}</a></p>
  <p><strong>Adress:</strong> {{ $team->address }}</p>
  <p><strong>City:</strong>  {{ $team->city }}</p>

  <h4>Team Players:</h4>

  <ul>
    @forelse ($team->players as $player)
      <li>
        <a href="{{ route('player', ['player' => $player->id]) }}">
          {{ $player->first_name}} {{ $player->last_name}}
        </a>
      </li>
      @empty
      <span>No Players</span>
    @endforelse
  </ul>
@endsection

