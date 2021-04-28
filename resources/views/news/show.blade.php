@extends('layouts.app')
@section('title', 'News - ' . $news->title)
@section('content')
    <div>
        <h1>{{ $news->title }}</h1>
        <p>{{ $news->content }}</p>
    </div>
@endsection
