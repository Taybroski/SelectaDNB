<div class="card">
	<div class="card-header text-center">Contents Options</div>
	<div class="card-body minh-40">
		<ul class="list-group list-unstyled text-dark">
			<a href="#"><li class="sidebar-item mt-0"><i class="fas fa-table pr-2"></i>Edit Content</li></a>
			<a href="#"><li class="sidebar-item"><i class="fas fa-expand pr-2"></i>Jumbotron</li></a>
			<a href="#"><li class="sidebar-item"><i class="fas fa-table pr-2"></i>Portfolio</li></a>
			<a href="{{ url('/orders') }}"><li class="sidebar-item"><i class="fas fa-th pr-2"></i>Gallery</li></a>
		</ul>
	</div>
	<div class="card-footer text-left">
		<a href="{{ URL::previous() }}"><i class="fas fa-arrow-alt-circle-left pr-2"></i> Back</a>
	</div>
</div>