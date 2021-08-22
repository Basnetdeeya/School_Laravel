@extends('app')
@section('content')
    <div class="container">
        <div class="my-2">
            <a href="/gallery" class="btn btn-primary">Back</a>
        </div>
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-md-4">
                    <img src="{{ asset($photo->name) }}" alt="" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
@endsection
