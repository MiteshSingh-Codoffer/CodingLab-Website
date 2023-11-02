@extends('masterlayout')

@section('content')
@if (Session::has('error'))
<p class="text-danger">{{ Session::get('error') }}</p>
@endif
@if (Session::has('success'))
<p class="text-success">{{ Session::get('success') }}</p>
@endif
<div class="containerss">
    <div class="wrapper">
      <div class="title"><span>Login Form</span></div>
      <form action="{{route('login')}}" method="post">
        @csrf
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="email" placeholder="Email or Phone" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="row button">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="/signup">Signup now</a></div>
      </form>
    </div>
  </div>

@endsection
