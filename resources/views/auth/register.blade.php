@extends('layouts.app')

@section('content')
<div>

<form action="{{route('register')}}" method="post">
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    @error('name')
    
    {{ $message }}

    @enderror


    
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Repeat password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
@endsection