@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-12 mb-3">
            @include('includes.profile_header')
        </div>
      
      <div class="f-row justify-content-center">

          {{-- Left sidebar --}}
          <div class="sidebar col-md-4" role="navigation">
              @include('includes.sidebar')
          </div>

          {{-- Right card main --}}
          <div class="col-md-8">
              @include('includes.profile')
          </div>

      </div>
  </div> 

@endsection
