@extends('masterlayout')

@section('content')
    <div class="containerss">
        <div class="wrapper">
            <div class="title"><span>Add a Gallery</span></div>
            <form action={{ route('insertview') }} method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value="{{old('name')}}" name="name" placeholder="Enter a Name" required>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="row">
                    <i class="fas fa-regular fa-keyboard"></i>
                    <input type="text" value="{{old('title')}}" name="title" placeholder="Title" required>
                    <span class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="row">
                    <i class="fas fa-regular fa-keyboard"></i>
                    <input type="text" value="{{old('desc')}}" name="desc" placeholder="Dicsprtion" required>
                    <span class="text-danger">
                        @error('desc')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="row">
                    <i class="fas fa-regular fa-file-image"></i>
                    <input type="file" value="{{old('imagetyl')}}" name="image" accept="image/*" placeholder="File Upload" required>
                    <span class="text-danger">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="row button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection
