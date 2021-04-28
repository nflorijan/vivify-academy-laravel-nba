@extends('layouts.app')
@section('title', 'News')
@section('content')
    <h2>News</h2>
    <ul class="list-group list-group-flush">
    @forelse ($news as $singleNews)
        <div class="list-group-item">
            <a href="{{ route('news', ['news' => $singleNews->id]) }}">
            {{ $singleNews->title }}
            </a>
            <br>
            <span>Uploaded by: <strong>{{ $singleNews->user->name }}</strong></span>
        </div>
    @empty
        <h3>No news.</h3>
    @endforelse
    </ul>
    <div>
        {{ $news->links() }}
    </div>
@endsection
<style>
    svg {
      width: 20px;
    }
  </style>
