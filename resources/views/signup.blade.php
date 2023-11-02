@extends('masterlayout')

@section('content')
@if (Session::has('error'))
<p class="text-danger">{{ Session::get('error') }}</p>
@endif

<div class="containerss">
    <div class="wrapper">
      <div class="title"><span> Sign up Form</span></div>
      <form action={{route('signup')}} method="post" novalidate>
        @method('post')
        @csrf
        <div class="row mt-2">
            <i class="fas fa-user"></i>
            <input type="text" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" placeholder="User Name" name="name" required>
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
          </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" placeholder="Email or Phone" name="email" required>
          <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror" placeholder="Create Password" name="password" required>
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
          </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
        </div>
        {{-- <div class="pass"><a href="#">Forgot password?</a></div> --}}
        <div class="row button">
          <input type="submit" value="Sign Up">
        </div>
        <div class="signup-link">Are you a member? <a href="/login">Login now</a></div>
      </form>
    </div>
  </div>

@endsection
