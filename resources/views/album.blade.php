@extends('masterlayout')

@section('content')

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.column img{
    height: 200px;
    width: 100%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<div class="container pt-5">
<div class="row pt-5">
@if ($image->count() > 0)
@foreach ($image as $key => $img)
<div class="column">
<img src="{{$img['download_url']}}" >
</div>
@endforeach
@else
<div class="spinner-border text-danger" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>

@endif


  </div>
</div>
@endsection
