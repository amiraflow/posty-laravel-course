@extends('layouts.app')

@section('content')
<div>

@if(session('status'))
{{ session('status') }}
@endif

<form action="{{route('login')}}" method="post">
@csrf



<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value= "{{ old('email') }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    @error('email')
    
    {{ $message }}

    @enderror
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    @error('password')
    
    {{ $message }}

    @enderror
  </div>

  <div class="mb-4">
    <div class="flex items-center">
    <input type="checkbox" name="remember" id="remember" class="mr-2">
    <label for="remember">Remember me</label>
 </div>
</div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
@endsection