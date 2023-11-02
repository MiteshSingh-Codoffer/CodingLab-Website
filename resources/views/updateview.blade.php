@extends('masterlayout')

@section('content')

<div class="containerss">
    <div class="wrapper">
      <div class="title"><span>Update a Gallery</span></div>
      <form action="{{route('sendUser',$data->id)}}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="name" placeholder="Enter a Name" value="{{$data->name}}" required>
        </div>
        <div class="row">
          <i class="fas fa-regular fa-keyboard"></i>
          <input type="text" name="title" placeholder="Title" value="{{$data->title}}" required>
        </div>
        <div class="row">
            <i class="fas fa-regular fa-keyboard"></i>
            <input type="text" name="desc" placeholder="Dicsprtion" value="{{$data->desc}}" required>
          </div>
          <div class="row">
            <i class="fas fa-regular fa-file-image"></i>
            <input type="hidden" name="prevImg"  value="{{$data->image}}" required>
            <input type="file" name="img" accept="image/*" placeholder="File Upload" required>
          </div>
        <div class="row button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

@endsection
