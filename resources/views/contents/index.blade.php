@extends('layouts.app')

@section('content')

<div class="container">
	
	<div class="justify-content-center">
		<div class="f-row">
			{{-- Left sidebar --}}
			<div class="sidebar col-md-4" role="navigation">
				@include('contents.includes.sidebar')
			</div>
	
			{{-- Right card main --}}
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<p class="text-center">Content Manager</p>
					</div>

					<div class="card-body minh-40 p-2 pl-3">
						<p>This is your CMS page or Content Manager - From here you can update your page details, such as the jumbotron image, gallery imagery, add images to portfolio, change and update technical, legal and marketing info such as the about, privacy, terms etc pages.</p>
					</div>
					<div class="card-footer text-right">
							<a href="{{ url('/home') }}">Visit Profile <i class="fas fa-arrow-alt-circle-right pl-2"></i></a>
					</div>
				</div>
			</div>
		</div>

</div> 
	
@endsection