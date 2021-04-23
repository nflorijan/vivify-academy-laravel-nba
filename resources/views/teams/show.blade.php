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
      <span>his team has no players</span>
    @endforelse
  </ul>

  <h4>Comments</h4>
  <ul class="list-group list-group-flush">
    @forelse ($team->comments as $comment)
      <li class="list-group-item">
        <p><strong>Comment:</strong> {{ $comment->content }} <span>{{ $comment->created_at }}</span></p>
        <p><strong>Author:</strong> {{ $comment->user->name }}</p>
      </li>
    @empty
        <p>This team has no comments</p>
    @endforelse
  </li>
@endsection

