@extends('layouts.app')

@section('title', 'Nba teams')

@section('content')
  <h2>Nba teams</h2>
  <ul class="list-group list-group-flush">
    @foreach ($teams as $team)
      <li class="list-group-item">
        <h4><a href="{{ route('team', ['team' => $team->id]) }}">{{ $team->name }}</a></h4>
      </li>
    @endforeach
  </ul>
@endsection
