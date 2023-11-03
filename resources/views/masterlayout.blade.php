<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('/css/icon.png')}}">

    <title> Website Layout | CodingLab</title>

    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>



        <title>Gallery</title>

    </head>
<body>
  <header>
    <div class="menu">
      <div class="logo">
        <a href="#">CodingLab</a>
      </div>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/album">Album</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/feedback">Feedback</a></li>

        @if (Auth::check())
        <li><a href="{{ route('logout') }}">Logout</a></li>
        @else
        <li><a href="/login">Login</a></li>

        @endif

      </ul>
    </div>
  </header>
  {{-- <div class="img"></div>
  <div class="center">
    <div class="title">Create Amazing Website</div>
    <div class="sub_title">Pure HTML & CSS Only</div>
    <div class="btns">
      <button>Learn More</button>
      <button>Subscribe</button>
    </div>
  </div> --}}
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
