@extends('layouts.app')

@section('content')

<p>HELLO WORLD!!!!!</p>
@if (count($products) > 0)
    @foreach ($products as $product)
        <div class="form-group">
            <h1>{{ $product->title }}</h1>
            <p>{{ $product->type }}</p>
            <p>{{ $product->size }}</p>
            <p>{{ $product->colour }}</p>
        </div>
    @endforeach
@endif

@endsection