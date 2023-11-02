@extends('masterlayout')

@section('content')
    {{-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <title>Gallery</title>

    </head>

    <body> --}}

        <div class="container aa">
            <h2>Add a New Gallery : <a href="/insertview" class="btn btn-dark">Insert</a>
            </h2>
            <div class="container pt-2" >
                {{ $gallery->links('pagination::bootstrap-4') }}
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 pt-2">
                @foreach ($gallery as $id => $data)
                    <div class="col">
                        <div class="card h-100  ">
                            <img src={{ asset('/storage/uploads/' . $data->image) }} class="card-img-top galleryimg"
                                alt="...">
                            <div class="card-body">
                                <h3 class="card-title">{{ $data->name }} </h3>
                                <h5 class="card-title">{{ $data->title }} </h5>
                                <p class="card-text">{{ $data->desc }}</p>

                            </div>
                            <div class="d-flex justify-content-between  px-3 py-3 ">
                                <a href="#" class="btn btn-primary">View</a>
                                <a href="/updateview/{{$data->id}}" class="btn btn-secondary">Update</a>
                                <a href="/gallery/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">{{ $data->created_at }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>





       {{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    </body>

    </html> --}}
@endsection
