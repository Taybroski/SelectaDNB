@extends('layouts.app')

@section('content')

  <div class="container">
      <h1 class="text-muted text-center">HELLO ADMIN!</h1>
      <div class="f-row justify-content-center">

          {{-- Left sidebar --}}
          <div class="sidebar col-md-4" role="navigation">
              @include('admin.includes.sidebar')
          </div>

          {{-- Right card main --}}
          <div class="col-md-8">
              @include('admin.includes.profile')
          </div>

      </div>
  </div> 
    
@endsection