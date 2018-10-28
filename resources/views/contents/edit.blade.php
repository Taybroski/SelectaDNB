@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12 mb-3">
		<h1 class="text-muted text-center">Edit Content</h1>
	</div>

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
							<p class="text-center">About</p>
					</div>

					<form action="/contents/update" method="post" role="form">
						@foreach ($about as $about)
								
							<div class="card-body minh-40">
								{{ method_field('PUT') }}
								{{ csrf_field() }}

								{{-- About --}}
								<div class="form-group">
									<label for="about_title">Title</label>
									<input name="about_title" type="text" class="form-control" value="{{ $about->about_title }}">
									<br>
									<label for="about_body">Body</label>
									<textarea name="about_body" class="form-control" cols="30" rows="6" value="{{ $about->about_body }}"></textarea>
								</div>

							</div>
							<div class="card-footer text-right">
									<button type="submit">Save Changes<i class="fas fa-arrow-alt-circle-right pl-2"></i></button>
							</div>

						@endforeach
					</form>
				</div>

			</div>
		</div>

	</div>
</div> 
	
@endsection