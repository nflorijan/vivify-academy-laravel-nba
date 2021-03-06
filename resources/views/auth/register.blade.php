@extends('layouts.app')

@section('title', 'Register')

@section('content')
  <h2>Register Form</h2>

  <form action="/register" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input 
          name="name" 
          id="name" 
          type="text" 
          class="form-control @error('name')is-invalid @enderror" 
          placeholder="Enter name"
          >
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input 
          name="email" 
          id="email" 
          type="email" 
          class="form-control @error('email')is-invalid @enderror" 
          placeholder="Enter email"
          >
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input 
          name="password" 
          id="password" 
          type="password" 
          class="form-control @error('password')is-invalid @enderror" 
          placeholder="Enter password"
          >
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password-confirmation">Confirm password</label>
        <input 
          name="password_confirmation" 
          id="password-confirmation" 
          type="password" 
          class="form-control @error('password_confirmation')is-invalid @enderror" 
          placeholder="Confirm password"
          >
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-check">
        <input name="agreed"  id="agreed" type="checkbox" class="form-check-input" value="1">
        <label for="agreed" class="form-check-label">I agree terms and conditions</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


