<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <h1>This is a Basic Hello world page</h1>
        <h2>Hello, world!</h2>
        {{ 5 + 2 }} <br>
        {{ 'hello World' }}<br>
        @php
            $name = ['Salman Khan', 'John Abraham', 'Shahid Kapoor'];
        @endphp
        {{-- <ul>
            @foreach ($name as $n)
                <li> {{$loop->index}} - {{ $n }} </li>
                <li> {{$loop->iteration}} - {{ $n }} </li>
            @endforeach
        </ul> --}}
        <ul>
            @foreach ($name as $n)
                @if ($loop->odd)
                <li style="color: red" > {{$n}} </li>
                @else
                    <li style="color:aqua" > {{$n}} </li>
                @endif
            @endforeach
        </ul>
        <a href="/" class="btn btn-primary">Go to Home page</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
