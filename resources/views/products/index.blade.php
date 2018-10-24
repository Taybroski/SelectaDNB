@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($products) > 0)
        <div class="card-deck row mb-3 text-center justify-content-lg-center">
            @foreach ($products as $product)
                <div class="card mb-4 box-shadow mw-20">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ ucfirst(trans($product->type)) }}</h4>
                    </div>
                    <div class="card-body">
                        <img src="/storage/images/{{ $product->cover_image }}" alt="{{ $product->title }}" class="img-custom">
                        <h1 class="card-title pricing-card-title"><small class="text-muted">{{ $product->title }} - {{ $product->colour }}</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>{{ $product->size }}</li>
                            <li>&pound; {{ $product->price }}</li>
                            @if ($product->qoh < 5)
                                <li class="alert-info">Last few remaining!</li>
                            @elseif ($product->qoh > 0)
                                <li class="alert-success">In stock!</li>
                            @else
                                <li class="alert-danger font-weight-bold">Out of stock</li>
                            @endif
                        </ul>
                        <a href="/products/{{ $product->id }}" class="btn btn-lg btn-block btn-outline-primary">View</a>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Add To Basket</button>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h1 class="text-muted">No Products Available</h1>
    @endif
</div>
@endsection