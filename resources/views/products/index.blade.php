@extends('layouts.app')

@section('content')

<p>HELLO WORLD!!!!!</p>
@if (count($products) > 0)
    @foreach ($products as $product)
        <div class="container">
            <div class="card-deck mb-3 text-center mw-100 justify-content-lg-center">
                <div class="card mb-4 box-shadow mw-20">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ $product->type }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><small class="text-muted">{{ $product->title }}</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>{{ $product->size }}</li>
                            <li>{{ $product->colour }}</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
@endsection