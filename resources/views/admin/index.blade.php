@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12 mb-3">
		<div class="card">
			<h1 class="text-muted text-center">
				@if ($role == 'customer')
					<i class="fas fa-user pr-4"></i>Welcome {{ $name }} <small>({{ $role }})</small>
				@elseif ($role == 'agent')
						<i class="fas fa-user-tie pr-4"></i>Welcome {{ $name }} <small>({{ $role }})</small>
				@elseif ($role == 'admin')
					<i class="fas fa-user-secret pr-4"></i>Welcome {{ $name }} <small>({{ $role }})</small>
				@endif
			</h1>
		</div>
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