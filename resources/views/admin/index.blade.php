@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12 mb-3">
		@include('includes.profile_header')
	</div>

	<div class="justify-content-center">
		<div class="f-row">
			{{-- Left sidebar --}}
			<div class="sidebar col-md-4" role="navigation">
				@include('admin.includes.sidebar')
			</div>
	
			{{-- Right card main --}}
			<div class="col-md-8">
				@include('admin.includes.profile')
			</div>
		</div>

		{{-- Sales Dashboard --}}
		<div class="col-md-12 mt-3">
			@include('admin.includes.dashboard')
		</div>

	</div>
</div> 
	
@endsection