@extends('layouts.app')

@section('title', $player->first_name)

@section('content')
  <h4>{{ $player->first_name }} {{ $player->last_name }}</h4>
  <p><strong>Email:</strong> <a href="mailto:{{ $player->email }}">{{ $player->email }}</a></p>
  <p><strong>Player team:</strong> <a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></p>
@endsection

