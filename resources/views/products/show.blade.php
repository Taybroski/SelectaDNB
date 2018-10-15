@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mb-4 box-shadow mw-20">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{ $product->type }}</h4>
        </div>
        <div class="card-body">
            <img src="{{ $product->cover_image }}" alt="{{ $product->title }}" class="img-custom">
            <h1 class="card-title pricing-card-title"><small class="text-muted">{{ $product->title }} - {{ $product->colour }}</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Size: {{ $product->size }}</li>
                <li>&pound; {{ $product->price }}</li>
            </ul>
            <a href="{{ $product->id }}" class="btn btn-lg btn-block btn-outline-primary">View</a>
            <button type="button" class="btn btn-lg btn-block btn-primary">Add To Basket</button>
        </div>
    </div>
</div>
    
@endsection