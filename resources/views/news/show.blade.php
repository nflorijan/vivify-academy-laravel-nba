@extends('layouts.app')
@section('title', 'News - ' . $news->title)
@section('content')
    <div>
        <h2>{{ $news->title }}</h2>
        <p>{{ $news->content }}</p>
    </div>
    <div>
        <h3>News related to teams:</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                @forelse ($news->teams as $team)
                    <a href="{{ route('team', ['team' => $team->id]) }}">{{ $team->name }}</a>
                @empty
                    <p>No news for this team</p>
                @endforelse
            </li>
        </ul>
    </div>
@endsection
