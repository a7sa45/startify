@extends('layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="row mt-4">
            @foreach ($products as $product)
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">{{ $product->user->name }}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection