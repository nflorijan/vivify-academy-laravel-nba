@extends('layouts.app')
@section('title', 'News')
@section('content')
    <h2>News</h2>
    <ul class="list-group list-group-flush">
    @forelse ($news as $news)
        <div class="list-group-item">
            <a href="{{ route('news', ['news' => $news->id]) }}">
                <h2>{{ $news->title }}</h2>
            </a><span>Uploaded by: <strong>{{ $news->user->name }}</strong></span>
        </div>
    @empty
        <h3>No news.</h3>
    @endforelse
    </ul>
@endsection
