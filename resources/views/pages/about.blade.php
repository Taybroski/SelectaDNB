@extends('layouts.app')

@section('content')
    
  @foreach ($about as $a)
    <h1 class="text-muted text-center">{{ $a->about_title }}</h1>

    <p class="text-muted text-center">{{ $a->about_body }}</p>
  @endforeach

@endsection