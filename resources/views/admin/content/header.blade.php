@extends('layouts.app')

@section('content')

<div class="container">

	<div class="justify-content-center">
		<div class="f-row">
			{{-- Left sidebar --}}
			<div class="sidebar col-md-4" role="navigation">
				@include('admin.includes.sidebar')
			</div>
	
			{{-- Right card main --}}
			<div class="col-md-8">

        <div class="card">
          <div class="card-header">
            <p class="text-center">Change Header Image</p>
          </div>

          <div class="card-body minh-40">
            
            <form action="ImagesController@store" method="/images" enctype="multipart/form-data" role="form">
              {{ csrf_field() }}
              <div class="f-row">
                <div class="col-force">
                  <label for="link" class="small">Choose Image</label>
                  <input type="file" name="link">
                  <input type="hidden" name="header">
                </div>
                
                  
              </div>
            </form>
            
          </div>
          <div class="card-footer text-right">
              <a href="{{ url('/home') }}">Visit Profile <i class="fas fa-arrow-alt-circle-right pl-2"></i></a>
          </div>
        </div>

			</div>
    </div>
    
</div> 
	
@endsection