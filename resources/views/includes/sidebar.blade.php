<div class="card">
	<div class="card-header text-center">Navigation</div>
	<div class="card-body minh-40">
		<ul class="list-group list-unstyled text-dark">
			<a href="{{ url('#') }}"><li class="sidebar-item mt-0 text-muted"><i class="fas fa-database pr-2"></i>Order History</li></a>
			<a href="{{ url('#') }}"><li class="sidebar-item text-muted"><i class="fas fa-map-marker-alt pr-2"></i>Change Details</li></a>
			<a href="#"><li class="sidebar-item text-muted"><i class="fas fa-question-circle pr-2"></i>Wheres My Stuff?</li></a>
			<a href="#"><li class="sidebar-item text-muted"><i class="fas fa-envelope pr-2"></i>Contact Us</li></a>
			<a href="#"><li class="sidebar-item text-muted"><i class="fab fa-blogger-b pr-2"></i>Blog</li></a>
		</ul>
	</div>
	<div class="card-footer text-left">
		@if (Auth::check())
			<a href="{{ route('logout') }}" 
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<i class="fas fa-arrow-alt-circle-left pr-2"></i> Logout</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
		@endif
	</div>
</div>