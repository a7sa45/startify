@extends('layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="row mt-4">
            @foreach ($services as $service)
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->name }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                        <a href="#" class="btn btn-primary">{{ $service->user->name }}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection