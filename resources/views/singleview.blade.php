@extends('masterlayout')

@section('content')
<div class="container pt-5 " >
<div class="row pt-5 pb-2">
        <div class="col ">
            <div class="card h-100  ">
                <img src={{ asset('/storage/uploads/' . $data[0]->image) }} class="card-img-top galleryimg"
                    alt="..."   style="height: 300px;">
                <div class="card-body">
                    <h3 class="card-title">{{ $data[0]->name }} </h3>
                    <h5 class="card-title">{{ $data[0]->title }} </h5>
                    <p class="card-text">{{ $data[0]->desc }}</p>

                </div>
                <div class="d-flex justify-content-between  px-3 py-3 ">
                    <a href="/gallery" class="btn btn-primary">Back to Gallery</a>

                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">{{ $data[0]->created_at }}</small>
                </div>
            </div>
        </div>

</div>
</div>
@endsection
