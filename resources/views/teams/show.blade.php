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
  @auth
    <form method="POST" action="/teams/{{ $team->id }}/comments" class="w-50 mt-3">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="team_id" value="{{ $team->id }}">
        <div class=" form-group mt-3">
            <textarea rows="3" class="form-control" id="content" name="content"
                placeholder="Comment..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
  @endauth
@endsection

